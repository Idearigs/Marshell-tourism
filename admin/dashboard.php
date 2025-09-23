<?php
session_start();
require_once '../includes/config.php';

// Check if logged in
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header('Location: login.php');
    exit;
}

$pdo = getDBConnection();
if (!$pdo) {
    die('Database connection failed');
}

// Handle actions
$message = '';
if ($_POST) {
    if (isset($_POST['action'])) {
        switch ($_POST['action']) {
            case 'approve':
                $reviewId = intval($_POST['review_id']);
                $stmt = $pdo->prepare("UPDATE reviews SET is_approved = TRUE WHERE id = ?");
                if ($stmt->execute([$reviewId])) {
                    $message = 'Review approved successfully';
                    updatePackageStats($pdo, $_POST['package_id']);
                }
                break;

            case 'reject':
                $reviewId = intval($_POST['review_id']);
                $stmt = $pdo->prepare("UPDATE reviews SET is_approved = FALSE WHERE id = ?");
                if ($stmt->execute([$reviewId])) {
                    $message = 'Review rejected successfully';
                    updatePackageStats($pdo, $_POST['package_id']);
                }
                break;

            case 'delete':
                $reviewId = intval($_POST['review_id']);
                $stmt = $pdo->prepare("DELETE FROM reviews WHERE id = ?");
                if ($stmt->execute([$reviewId])) {
                    $message = 'Review deleted successfully';
                    updatePackageStats($pdo, $_POST['package_id']);
                }
                break;
        }
    }
}

function updatePackageStats($pdo, $packageId) {
    $stmt = $pdo->prepare("
        UPDATE tour_packages SET
            total_rating = (SELECT AVG(rating) FROM reviews WHERE package_id = ? AND is_approved = TRUE),
            review_count = (SELECT COUNT(*) FROM reviews WHERE package_id = ? AND is_approved = TRUE)
        WHERE id = ?
    ");
    $stmt->execute([$packageId, $packageId, $packageId]);
}

function generateStars($rating, $maxStars = 5) {
    $output = '<div class="star-display">';
    for ($i = 1; $i <= $maxStars; $i++) {
        if ($i <= $rating) {
            $output .= '<span class="star-icon">★</span>';
        } else {
            $output .= '<span class="star-icon empty">★</span>';
        }
    }
    $output .= '</div>';
    return $output;
}

// Get all reviews with package information
$reviewsStmt = $pdo->query("
    SELECT r.*, tp.package_name, tp.package_slug
    FROM reviews r
    JOIN tour_packages tp ON r.package_id = tp.id
    ORDER BY r.created_at DESC
");
$reviews = $reviewsStmt->fetchAll();

// Get package statistics
$statsStmt = $pdo->query("
    SELECT tp.*,
           COUNT(r.id) as total_reviews,
           SUM(CASE WHEN r.is_approved = TRUE THEN 1 ELSE 0 END) as approved_reviews,
           SUM(CASE WHEN r.is_approved = FALSE THEN 1 ELSE 0 END) as rejected_reviews
    FROM tour_packages tp
    LEFT JOIN reviews r ON tp.id = r.package_id
    GROUP BY tp.id
    ORDER BY tp.package_name
");
$packageStats = $statsStmt->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Marshel Tourism</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <script src="../assets/js/phosphor-icon.js"></script>
    <style>
        body {
            background-color: #f8f9fa;
        }
        .navbar {
            background: linear-gradient(45deg, #007bff, #0056b3);
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        .card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
            margin-bottom: 20px;
        }
        .card-header {
            background: linear-gradient(45deg, #28a745, #20c997);
            color: white;
            border-radius: 15px 15px 0 0 !important;
            font-weight: 600;
        }
        .btn-sm {
            border-radius: 20px;
            font-size: 12px;
            padding: 5px 15px;
        }
        .review-item {
            background: #fff;
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 15px;
            border-left: 4px solid #007bff;
        }
        .review-pending {
            border-left-color: #ffc107;
        }
        .review-approved {
            border-left-color: #28a745;
        }
        .review-rejected {
            border-left-color: #dc3545;
        }
        .stats-card {
            text-align: center;
            padding: 20px;
        }
        .stats-number {
            font-size: 2rem;
            font-weight: bold;
            color: #007bff;
        }
        .stars {
            color: #ffc107;
        }
        .star-display {
            display: inline-flex;
            gap: 2px;
        }
        .star-icon {
            color: #ffc107;
            font-size: 14px;
        }
        .star-icon.empty {
            color: #ddd;
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="#">
                <i class="ph ph-gear"></i> Marshel Tourism Admin
            </a>
            <div class="navbar-nav ms-auto">
                <span class="navbar-text me-3">
                    Welcome, <?= htmlspecialchars($_SESSION['admin_username']) ?>
                </span>
                <a class="btn btn-outline-light btn-sm" href="logout.php">
                    <i class="ph ph-sign-out"></i> Logout
                </a>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <?php if ($message): ?>
            <div class="alert alert-success alert-dismissible fade show">
                <i class="ph ph-check-circle"></i> <?= htmlspecialchars($message) ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        <?php endif; ?>

        <!-- Package Statistics -->
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0"><i class="ph ph-chart-bar"></i> Package Statistics</h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <?php foreach ($packageStats as $stat): ?>
                        <div class="col-md-4 mb-3">
                            <div class="stats-card border rounded">
                                <h6><?= htmlspecialchars($stat['package_name']) ?></h6>
                                <div class="stats-number"><?= $stat['approved_reviews'] ?></div>
                                <small class="text-muted">Approved Reviews</small>
                                <br>
                                <small>
                                    <span class="text-warning"><?= $stat['total_reviews'] - $stat['approved_reviews'] - $stat['rejected_reviews'] ?> Pending</span> |
                                    <span class="text-danger"><?= $stat['rejected_reviews'] ?> Rejected</span>
                                </small>
                                <?php if ($stat['total_rating']): ?>
                                    <div class="mt-2">
                                        <?= generateStars(round($stat['total_rating'])) ?>
                                        <small>(<?= number_format($stat['total_rating'], 1) ?>)</small>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>

        <!-- Reviews Management -->
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0"><i class="ph ph-chat-circle"></i> Review Management</h5>
            </div>
            <div class="card-body">
                <?php if (empty($reviews)): ?>
                    <div class="text-center py-5">
                        <i class="ph ph-chat-circle-text" style="font-size: 3rem; color: #ddd;"></i>
                        <p class="mt-3 text-muted">No reviews found</p>
                    </div>
                <?php else: ?>
                    <?php foreach ($reviews as $review): ?>
                        <div class="review-item <?=
                            $review['is_approved'] === null ? 'review-pending' :
                            ($review['is_approved'] ? 'review-approved' : 'review-rejected')
                        ?>">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="d-flex justify-content-between align-items-start mb-2">
                                        <div>
                                            <h6 class="mb-1"><?= htmlspecialchars($review['reviewer_name']) ?></h6>
                                            <small class="text-muted"><?= htmlspecialchars($review['reviewer_email']) ?></small>
                                        </div>
                                        <div class="text-end">
                                            <?= generateStars($review['rating']) ?>
                                            <small class="text-muted d-block mt-1"><?= date('M j, Y', strtotime($review['created_at'])) ?></small>
                                        </div>
                                    </div>

                                    <p class="mb-2"><strong>Package:</strong> <?= htmlspecialchars($review['package_name']) ?></p>
                                    <p class="mb-3"><?= htmlspecialchars($review['review_text']) ?></p>

                                    <div class="row text-center">
                                        <div class="col-3">
                                            <small class="text-muted">Comfort</small><br>
                                            <div style="font-size: 12px;"><?= generateStars($review['comfort_rating']) ?></div>
                                        </div>
                                        <div class="col-3">
                                            <small class="text-muted">Destination</small><br>
                                            <div style="font-size: 12px;"><?= generateStars($review['destination_rating']) ?></div>
                                        </div>
                                        <div class="col-3">
                                            <small class="text-muted">Accommodation</small><br>
                                            <div style="font-size: 12px;"><?= generateStars($review['accommodation_rating']) ?></div>
                                        </div>
                                        <div class="col-3">
                                            <small class="text-muted">Transport</small><br>
                                            <div style="font-size: 12px;"><?= generateStars($review['transport_rating']) ?></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="text-center">
                                        <div class="mb-2">
                                            <span class="badge <?=
                                                $review['is_approved'] === null ? 'bg-warning' :
                                                ($review['is_approved'] ? 'bg-success' : 'bg-danger')
                                            ?>">
                                                <?=
                                                    $review['is_approved'] === null ? 'Pending' :
                                                    ($review['is_approved'] ? 'Approved' : 'Rejected')
                                                ?>
                                            </span>
                                        </div>

                                        <div class="btn-group-vertical d-grid gap-2">
                                            <?php if (!$review['is_approved']): ?>
                                                <form method="POST" style="display: inline;">
                                                    <input type="hidden" name="action" value="approve">
                                                    <input type="hidden" name="review_id" value="<?= $review['id'] ?>">
                                                    <input type="hidden" name="package_id" value="<?= $review['package_id'] ?>">
                                                    <button type="submit" class="btn btn-success btn-sm">
                                                        <i class="ph ph-check"></i> Approve
                                                    </button>
                                                </form>
                                            <?php endif; ?>

                                            <?php if ($review['is_approved']): ?>
                                                <form method="POST" style="display: inline;">
                                                    <input type="hidden" name="action" value="reject">
                                                    <input type="hidden" name="review_id" value="<?= $review['id'] ?>">
                                                    <input type="hidden" name="package_id" value="<?= $review['package_id'] ?>">
                                                    <button type="submit" class="btn btn-warning btn-sm">
                                                        <i class="ph ph-x"></i> Reject
                                                    </button>
                                                </form>
                                            <?php endif; ?>

                                            <form method="POST" style="display: inline;"
                                                  onsubmit="return confirm('Are you sure you want to delete this review?')">
                                                <input type="hidden" name="action" value="delete">
                                                <input type="hidden" name="review_id" value="<?= $review['id'] ?>">
                                                <input type="hidden" name="package_id" value="<?= $review['package_id'] ?>">
                                                <button type="submit" class="btn btn-danger btn-sm">
                                                    <i class="ph ph-trash"></i> Delete
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>

        <!-- Testimonial Management -->
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0"><i class="ph ph-quotes"></i> Testimonial Management</h5>
            </div>
            <div class="card-body">
                <!-- Add New Testimonial Button -->
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h6>Manage Testimonials</h6>
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addTestimonialModal">
                        <i class="ph ph-plus"></i> Add New Testimonial
                    </button>
                </div>

                <!-- Testimonials List -->
                <div id="testimonialsList">
                    <div class="text-center py-3">
                        <div class="spinner-border text-primary" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Add Testimonial Modal -->
    <div class="modal fade" id="addTestimonialModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add New Testimonial</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form id="addTestimonialForm">
                        <div class="mb-3">
                            <label for="name" class="form-label">Name *</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="position" class="form-label">Position *</label>
                            <input type="text" class="form-control" id="position" name="position" required>
                        </div>
                        <div class="mb-3">
                            <label for="review" class="form-label">Review *</label>
                            <textarea class="form-control" id="review" name="review" rows="4" required></textarea>
                        </div>
                        <div class="mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="is_active" name="is_active" checked>
                                <label class="form-check-label" for="is_active">
                                    Active
                                </label>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary" onclick="addTestimonial()">Add Testimonial</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Edit Testimonial Modal -->
    <div class="modal fade" id="editTestimonialModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Testimonial</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form id="editTestimonialForm">
                        <input type="hidden" id="edit_id" name="id">
                        <div class="mb-3">
                            <label for="edit_name" class="form-label">Name *</label>
                            <input type="text" class="form-control" id="edit_name" name="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="edit_position" class="form-label">Position *</label>
                            <input type="text" class="form-control" id="edit_position" name="position" required>
                        </div>
                        <div class="mb-3">
                            <label for="edit_review" class="form-label">Review *</label>
                            <textarea class="form-control" id="edit_review" name="review" rows="4" required></textarea>
                        </div>
                        <div class="mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="edit_is_active" name="is_active">
                                <label class="form-check-label" for="edit_is_active">
                                    Active
                                </label>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary" onclick="updateTestimonial()">Update Testimonial</button>
                </div>
            </div>
        </div>
    </div>

    <script src="../assets/js/boostrap.bundle.min.js"></script>

    <script>
        // Testimonial Management JavaScript
        let testimonials = [];

        // Load testimonials on page load
        document.addEventListener('DOMContentLoaded', function() {
            loadTestimonials();
        });

        async function loadTestimonials() {
            try {
                const response = await fetch('../api/testimonials.php');
                const data = await response.json();

                if (data.success) {
                    testimonials = data.testimonials;
                    renderTestimonials();
                } else {
                    document.getElementById('testimonialsList').innerHTML =
                        '<div class="text-center py-3 text-danger">Failed to load testimonials</div>';
                }
            } catch (error) {
                document.getElementById('testimonialsList').innerHTML =
                    '<div class="text-center py-3 text-danger">Error loading testimonials</div>';
            }
        }

        function renderTestimonials() {
            const container = document.getElementById('testimonialsList');

            if (testimonials.length === 0) {
                container.innerHTML = `
                    <div class="text-center py-5">
                        <i class="ph ph-quotes" style="font-size: 3rem; color: #ddd;"></i>
                        <p class="mt-3 text-muted">No testimonials found</p>
                    </div>
                `;
                return;
            }

            const testimonialsHtml = testimonials.map(testimonial => `
                <div class="testimonial-item border rounded p-3 mb-3 ${testimonial.is_active ? 'border-success' : 'border-secondary'}">
                    <div class="row">
                        <div class="col-md-8">
                            <h6 class="mb-1">${escapeHtml(testimonial.name)}</h6>
                            <small class="text-muted mb-2 d-block">${escapeHtml(testimonial.position)}</small>
                            <p class="mb-2">"${escapeHtml(testimonial.review)}"</p>
                            <small class="text-muted">Added: ${new Date(testimonial.created_at).toLocaleDateString()}</small>
                        </div>
                        <div class="col-md-4 text-end">
                            <div class="mb-2">
                                <span class="badge ${testimonial.is_active ? 'bg-success' : 'bg-secondary'}">
                                    ${testimonial.is_active ? 'Active' : 'Inactive'}
                                </span>
                            </div>
                            <div class="btn-group-vertical btn-group-sm">
                                <button class="btn btn-outline-primary btn-sm" onclick="editTestimonial(${testimonial.id})">
                                    <i class="ph ph-pencil"></i> Edit
                                </button>
                                <button class="btn btn-outline-danger btn-sm" onclick="deleteTestimonial(${testimonial.id})">
                                    <i class="ph ph-trash"></i> Delete
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            `).join('');

            container.innerHTML = testimonialsHtml;
        }

        async function addTestimonial() {
            const form = document.getElementById('addTestimonialForm');
            const formData = new FormData(form);

            const testimonialData = {
                name: formData.get('name'),
                position: formData.get('position'),
                review: formData.get('review'),
                is_active: formData.get('is_active') === 'on'
            };

            try {
                const response = await fetch('../api/testimonials.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                    },
                    body: JSON.stringify(testimonialData)
                });

                const data = await response.json();

                if (data.success) {
                    bootstrap.Modal.getInstance(document.getElementById('addTestimonialModal')).hide();
                    form.reset();
                    document.getElementById('is_active').checked = true;
                    loadTestimonials();
                    showAlert('Testimonial added successfully!', 'success');
                } else {
                    showAlert('Failed to add testimonial: ' + data.message, 'danger');
                }
            } catch (error) {
                showAlert('Error adding testimonial', 'danger');
            }
        }

        function editTestimonial(id) {
            const testimonial = testimonials.find(t => t.id == id);
            if (!testimonial) return;

            document.getElementById('edit_id').value = testimonial.id;
            document.getElementById('edit_name').value = testimonial.name;
            document.getElementById('edit_position').value = testimonial.position;
            document.getElementById('edit_review').value = testimonial.review;
            document.getElementById('edit_is_active').checked = testimonial.is_active == 1;

            new bootstrap.Modal(document.getElementById('editTestimonialModal')).show();
        }

        async function updateTestimonial() {
            const form = document.getElementById('editTestimonialForm');
            const formData = new FormData(form);

            const testimonialData = {
                id: parseInt(formData.get('id')),
                name: formData.get('name'),
                position: formData.get('position'),
                review: formData.get('review'),
                is_active: formData.get('is_active') === 'on'
            };

            try {
                const response = await fetch('../api/testimonials.php', {
                    method: 'PUT',
                    headers: {
                        'Content-Type': 'application/json',
                    },
                    body: JSON.stringify(testimonialData)
                });

                const data = await response.json();

                if (data.success) {
                    bootstrap.Modal.getInstance(document.getElementById('editTestimonialModal')).hide();
                    loadTestimonials();
                    showAlert('Testimonial updated successfully!', 'success');
                } else {
                    showAlert('Failed to update testimonial: ' + data.message, 'danger');
                }
            } catch (error) {
                showAlert('Error updating testimonial', 'danger');
            }
        }

        async function deleteTestimonial(id) {
            if (!confirm('Are you sure you want to delete this testimonial?')) {
                return;
            }

            try {
                const response = await fetch('../api/testimonials.php', {
                    method: 'DELETE',
                    headers: {
                        'Content-Type': 'application/json',
                    },
                    body: JSON.stringify({ id: id })
                });

                const data = await response.json();

                if (data.success) {
                    loadTestimonials();
                    showAlert('Testimonial deleted successfully!', 'success');
                } else {
                    showAlert('Failed to delete testimonial: ' + data.message, 'danger');
                }
            } catch (error) {
                showAlert('Error deleting testimonial', 'danger');
            }
        }

        function showAlert(message, type) {
            const alertDiv = document.createElement('div');
            alertDiv.className = `alert alert-${type} alert-dismissible fade show`;
            alertDiv.innerHTML = `
                ${message}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            `;

            const container = document.querySelector('.container');
            container.insertBefore(alertDiv, container.firstChild);

            setTimeout(() => {
                alertDiv.remove();
            }, 5000);
        }

        function escapeHtml(text) {
            const div = document.createElement('div');
            div.textContent = text;
            return div.innerHTML;
        }
    </script>
</body>
</html>