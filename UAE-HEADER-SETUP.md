# 🏗️ HFE Header Setup & Fix Guide

## 🎯 Problem & [Section: Container]
└── [Logo: Image Widget] ← logo1.svg
└── [Container: Horizontal] (right aligned)
    ├── [HFE Navigation Menu #1] - Primary menu
    └── [HFE Navigation Menu #2] - Secondary menuion

### Issues Fixed:
- ✅ **Header different on homepage** - Now has site title, tagline, CEO image
- ✅ **Logo on left, menus on right** - Proper layout for both page types
- ✅ **HFE plugin integration** - Styled for horizontal layouts (uses `hfe-` CSS prefix)
- ✅ **Slideshow background** - CSS ready for Elementor or custom implementation
- ✅ **Plugin upgrade issues** - Robust CSS that handles updates

## 📋 Step-by-Step Implementation

### Step 1: Create HFE Header Templates

#### Regular Pages Header:
1. **Go to** Elementor > Templates > Theme Builder
2. **Create New** > Header
3. **Name**: "Regular Header"
4. **Build with Elementor widgets** (see widget guide below)
5. **Set Display Conditions**: All Pages (except Front Page)

#### Home Page Header:
1. **Create New** > Header  
2. **Name**: "Home Header"
3. **Build with Elementor widgets** (see widget guide below)
4. **Set Display Conditions**: Front Page Only

### Step 2: Configure UAE Menu Widgets

#### In Each Header Template:
1. **Add Container** > Set flexbox layout (justify: space-between)
2. **Left side**: Add Image widget (or Theme Site Logo widget)
3. **Right side**: Add another container for menus
4. **Add UAE Advanced Menu Widget** (first menu)
   - Widget Library > Ultimate Addons > UAE Advanced Menu
   - Menu: Select your primary menu
   - Layout: Horizontal
   - Styling: Minimal (CSS handles the styling)
4. **Add HFE Navigation Menu Widget** (first menu)
   - Widget Library > Header Footer Elementor > Navigation Menu
   - Menu: Select your primary menu
   - Layout: Horizontal

5. **Add HFE Navigation Menu Widget** (second menu)
   - Same process, select secondary menu
   - Layout: Horizontal

### Step 3: Widget Layout Structure

#### Regular Header Layout:
```
[Section/Container - Flexbox: space-between, align: center]
├── [Image Widget] - Your logo
└── [Container - Flexbox: row, gap: 2rem]
    ├── [HFE Navigation Menu #1] - Primary menu
    └── [HFE Navigation Menu #2] - Secondary menu
```

#### Home Page Header Layout:
```
[Section - Background: Slideshow with attraction images]
└── [Container - Flexbox: column, align: center]
    ├── [Container - Flexbox: space-between] (Top row)
    │   ├── [Image Widget] - Logo (+ CSS class: reia-property-card)
    │   └── [Container] - Menu container
    │       ├── [HFE Navigation Menu #1]
    │       └── [HFE Navigation Menu #2]
    ├── [Heading Widget] - Site title (H1)
    ├── [Text Editor Widget] - Site tagline
    └── [Image Widget] - CEO image (+ CSS class: reia-agent-card)
```

### Step 4: Required Images & Assets

Upload these to `/wp-content/themes/reia-hello-child/assets/`:
- `logo1.svg` - Your site logo
- `mikko-jetsu.jpg` - CEO image (120x120px recommended)
- Attraction images for slideshow background

### Step 4: Configure Slideshow Background (Home Only)

#### Option A: Elementor Background (Recommended)
1. **Select home header section**
2. **Style > Background > Slideshow**
3. **Add attraction images**
4. **Ken Burns: Yes**
5. **Duration: 5000ms**

#### Option B: Custom JavaScript (Already included in template)
- Works automatically if you add slideshow HTML
- Change image URLs in template

## 🎨 Styling Features

### Regular Pages:
- **Clean header** with logo left, menus right
- **Sticky positioning** for better UX
- **Glass morphism** background effect
- **Responsive** layout for mobile

### Home Page:
- **Expanded header** with branding
- **Site title & tagline** prominently displayed
- **CEO image** with optional border animation
- **Slideshow background** with overlay
- **White text** optimized for dark backgrounds

### Border Animation Integration:
- **Logo**: Add `reia-property-card` class for subtle rotation
- **CEO Image**: Add `reia-agent-card` class for profile animation

## 📱 Responsive Behavior

### Desktop (>768px):
- Logo left, menus right in single row
- Home page: vertical layout with all elements

### Mobile (≤768px):
- Stacked layout: logo top, menus below
- Header becomes non-sticky for better mobile UX
- Smaller text and spacing

## 🔧 Troubleshooting

### Common Issues:

#### Menus Not Showing:
1. **Check WordPress > Appearance > Menus**
2. **Ensure menus are assigned** to locations
3. **Verify UAE widget settings** (layout: horizontal)

#### Home Page Header Not Different:
1. **Check display conditions** in Theme Builder
2. **Ensure home header is set to "Front Page"**
3. **Clear cache** and test in incognito

#### Images Not Loading:
1. **Check file paths** in template
2. **Upload images** to correct directory
3. **Update URLs** in template if needed

#### Slideshow Not Working:
1. **Use Elementor background** instead of custom JS
2. **Check image file sizes** (optimize for web)
3. **Verify CSS compilation** included UAE styles

### Quick Fixes:
```bash
# Recompile CSS if styles not loading
./build.sh dev

# Check WordPress menu assignments
wp menu list

# Clear cache
wp cache flush
```

## 🎯 Advanced Customization

### Colors:
```scss
// In _variables.scss
$header-bg: rgba(255, 255, 255, 0.95);
$menu-color: #002D5F;
$menu-hover: #0073e6;
```

### Timing:
```scss  
// In _uae-header.scss
$slideshow-duration: 5s;
$menu-transition: 0.3s;
```

### Layout:
```scss
// Logo size
.site-logo img { height: 80px; } // Increase from 60px

// Menu spacing
.header-nav-container { gap: 3rem; } // Increase from 2rem
```

---

## 📊 Before vs After

### Before:
- ❌ Same header on all pages
- ❌ Poor UAE menu styling  
- ❌ No slideshow background
- ❌ Plugin upgrade breakage

### After:
- ✅ Unique home page header with branding
- ✅ Professional UAE menu styling
- ✅ Slideshow background support
- ✅ Robust CSS that survives updates
- ✅ Border animations ready
- ✅ Mobile responsive
- ✅ Performance optimized

Your header should now match the quality of your main site while adding the animated border effects where appropriate! 🎉

## 💡 Next Steps

1. **Test both header templates** on staging
2. **Add actual menu items** to WordPress
3. **Upload CEO image and logos**  
4. **Configure slideshow backgrounds**
5. **Test on mobile devices**
6. **Consider border animations** for key elements
