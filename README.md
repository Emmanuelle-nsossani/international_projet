# **How to Use PHP in This Project**  

### **1. Requirements**  
Before running the project, make sure you have:  
✅ A local server like **WAMP, XAMPP, or MAMP** installed.  
✅ **PHP 8** or higher installed on your system.  

### **2. Where to Put HTML & CSS Files**  
- **HTML files** are inside the `view/` folder. Example: `view/home.view.php`.  
- **CSS files** go inside `public/css/`. Example: `public/css/home.css`.  

### **3. How to Display a Page**  
1. Start your local server (WAMP, XAMPP, etc.).  
2. Place the project inside the `www` (WAMP) or `htdocs` (XAMPP) folder.  
3. Open your browser and go to:  
   ```
   http://localhost/international_projet/index.php
   ```  
4. This will load `index.php`, which will include the right page from `view/`.  

### **4. How to Add a New Page**  
To add a new page, create a PHP file at the root of the project (same level as `index.php`). The file should look like this:  

```php
<?php

$css = 'styles.css'; // Link to the CSS file if needed
$page_title = "Example"; // Page title

ob_start();
include 'app/view/example.view.php'; // Include the page content
$content = ob_get_clean();
include 'app/view/common/layout.php'; // Use the main layout
```

This ensures your new page follows the same structure as the others.  

Let me know if you need more details! 🚀
