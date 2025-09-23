# 🗺️ Sri Lanka Location Manager - Edit Mode Documentation

## Overview
The Marshall Tourism rent-a-car page includes a hidden location management system that allows administrators to customize location pins, add new destinations, and manage the interactive map experience.

## 🔓 Activation Methods

### Method 1: Secret Keyboard Sequence
Type **`editmode`** (all lowercase) anywhere on the rent-a-car page to activate edit mode.
- Must be typed within 3 seconds
- Case sensitive (lowercase only)
- Works on any part of the page

### Method 2: Konami Code
Use the classic gaming cheat code: **↑ ↑ ↓ ↓ ← → ← → B A**
- Use arrow keys for directions
- Press 'B' then 'A' keys
- Triggers with a fun "Konami Code Detected!" message

### Method 3: Developer Console
Open browser developer tools (F12) and run:
```javascript
activateLocationEditMode()
```

### Method 4: Console Hints
Check the browser console for activation hints and tips when the page loads.

## 🎛️ Edit Mode Features

### Visual Indicators
- **Blue dashed border** appears around the map
- **Control buttons** become visible above the map
- **Success notification** confirms activation
- **Console logging** shows available commands

### Available Controls

#### 1. **Enable Edit Mode** (Blue Button)
- Switches between normal and edit modes
- In edit mode: pins become draggable with orange dashed borders
- Hover tooltips are disabled during editing

#### 2. **Add New Location** (Green Button)
- Opens creation modal with form fields:
  - Location name (required)
  - Description
  - Category (Normal, Beach/Relaxing, Religious Temple)
  - Custom image URL with live preview
- Click-to-place functionality on map
- Visual crosshair cursor and instruction overlay

#### 3. **Save Layout** (Blue Info Button)
- Saves current location setup to browser localStorage
- Includes positions, names, descriptions, categories, and images
- Shows success notification when saved
- Data persists across browser sessions

#### 4. **Load Saved** (Orange Warning Button)
- Restores previously saved location layout
- Rebuilds all pins from saved data
- Shows warning if no saved data exists
- Updates destination list automatically

#### 5. **Reset Default** (Gray Secondary Button)
- Returns to original 6 default locations
- Confirmation dialog prevents accidental resets
- Removes all custom locations
- Restores original positions and content

## 🏷️ Location Management

### Editing Existing Locations
**Double-click any pin in edit mode** to open the edit modal:

#### Form Fields:
- **Location Name**: Change the display name
- **Description**: Update the descriptive text
- **Category**: Choose from Normal, Beach, or Religious
- **Image URL**: Set custom image with live preview
- **Actions**: Save, Cancel, or Delete location

#### Icon Categories:
- **Normal Location** 📍 - Blue pin icon
- **Beach/Relaxing** ☀️ - Orange sun icon
- **Religious Temple** 🪷 - Purple lotus icon

### Drag & Drop Positioning
- **Grab any pin** in edit mode to move it
- **Constrained to map boundaries** (5-95% of container)
- **Real-time position updates** saved to data
- **Visual feedback** with opacity and cursor changes

### Data Persistence
All changes are automatically saved to localStorage:
```javascript
localStorage.getItem('sriLankaLocations')
```

Data structure includes:
- Location positions (top/left percentages)
- Names and descriptions
- Category assignments
- Custom image URLs
- Timestamp of last save

## 🎨 Visual Features

### Hover Tooltips (Normal Mode)
- **200ms delay** before showing
- **Location image** with fallback handling
- **Name and description** text
- **Category badge** with color coding
- **Smart positioning** (above/below pin based on space)
- **Smooth animations** with fade in/out

### Pin Highlighting
- **Selected pins** turn orange with pulsing animation
- **Scale transformation** (1.2x) for selected state
- **Enhanced shadows** for visual depth
- **Category-specific colors** maintained

### Modern Card Design
- **3D drop shadows** with blue accent
- **Rounded corners** (20px border radius)
- **Numbered badges** on location images
- **Read more links** with hover animations
- **Responsive design** for mobile compatibility

## 🔧 Technical Details

### Browser Compatibility
- **Modern browsers** with ES6+ support
- **localStorage** required for persistence
- **Drag and Drop API** for pin movement
- **CSS Grid/Flexbox** for layout

### Performance Considerations
- **Event delegation** for dynamic pins
- **Debounced input handlers** for image previews
- **Efficient DOM manipulation** with documentFragment
- **Memory cleanup** for event listeners

### Security Features
- **URL validation** for image inputs
- **Input sanitization** for text fields
- **Error handling** for malformed data
- **Graceful fallbacks** for missing images

## 🚫 Limitations

### What Edit Mode Cannot Do:
- **Modify the base map image** (Sri Lanka outline)
- **Change map container dimensions**
- **Edit vehicle selection options**
- **Modify booking form fields**
- **Access other page sections**

### Data Limitations:
- **localStorage only** (not synced across devices)
- **5-10MB browser storage limit**
- **No server-side persistence**
- **Lost on browser data clearing**

## 🛠️ Troubleshooting

### Edit Mode Not Activating:
1. Check browser console for JavaScript errors
2. Ensure page has fully loaded
3. Try typing "editmode" slowly and clearly
4. Use F12 console method as backup

### Features Not Working:
1. **Drag & Drop**: Ensure edit mode is enabled first
2. **Image Previews**: Check URL format and CORS policies
3. **Save/Load**: Verify localStorage is enabled in browser
4. **Tooltips**: Make sure edit mode is disabled

### Data Loss Prevention:
1. **Regular saves** using Save Layout button
2. **Export data** via console: `JSON.stringify(localStorage.getItem('sriLankaLocations'))`
3. **Backup important layouts** before major changes
4. **Test changes** before finalizing

## 📱 Mobile Usage

### Touch Interactions:
- **Tap and hold** for drag & drop on mobile
- **Double tap** to edit locations
- **Swipe gestures** work in destination cards
- **Responsive tooltips** adapt to screen size

### Mobile-Specific Features:
- **Larger touch targets** for pins and buttons
- **Simplified drag feedback** for performance
- **Reduced animation complexity** on slower devices
- **Optimized modal sizes** for small screens

## 🎯 Best Practices

### Content Management:
1. **Use descriptive names** for easy identification
2. **Keep descriptions concise** for card readability
3. **Choose appropriate categories** for visual consistency
4. **Use high-quality images** (16:9 aspect ratio recommended)

### Layout Design:
1. **Distribute pins evenly** across the map
2. **Avoid overlapping locations** for clarity
3. **Group similar categories** geographically when possible
4. **Test on multiple screen sizes** for responsiveness

### Data Management:
1. **Save frequently** during editing sessions
2. **Document major changes** for team reference
3. **Test all functionality** after modifications
4. **Keep backup of working layouts**

---

**⚠️ Important**: This edit mode is intended for administrative use only. The buttons are hidden from regular users to maintain a clean interface while preserving all functionality for content management purposes.

**🔒 Security Note**: Edit mode activation methods are designed to be discoverable by developers and administrators while remaining hidden from casual users.