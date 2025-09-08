<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>WordPress Tea Shop – README</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
</head>
<body>

<h1>WordPress Tea Shop</h1>
<p>A lightweight e-commerce website for selling tea bags with different features (flavor, caffeine level, packaging, and more).</p>

<h2>Features</h2>
<ul>
  <li>Product catalog with categories and tags</li>
  <li>Single product pages with details and images</li>
  <li>Cart and checkout (WooCommerce)</li>
  <li>Search and filters (by flavor, caffeine, organic, etc.)</li>
  <li>Pages: Home, Shop, About, Contact</li>
</ul>

<h2>Local Setup (XAMPP)</h2>
<ol>
  <li>Start <strong>Apache</strong> and <strong>MySQL</strong> in XAMPP.</li>
  <li>Create a database in <code>phpMyAdmin</code> (e.g., <code>teashop_db</code>).</li>
  <li>Copy this project into <code>C:\xampp\htdocs\wordpress-tea-shop</code>.</li>
  <li>Visit <code>http://localhost/wordpress-tea-shop/</code> and run the WordPress installer.</li>
  <li>Set DB credentials during install or in <code>wp-config.php</code>.</li>
</ol>

<h3>Example DB Settings (wp-config.php)</h3>
<pre>
define('DB_NAME', 'teashop_db');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_HOST', 'localhost');
</pre>

<h2>Repository Structure</h2>
<pre>
wordpress-tea-shop/
├─ wp-admin/
├─ wp-content/
│  ├─ plugins/
│  └─ themes/
│     └─ &lt;your-theme&gt;/
└─ wp-includes/
</pre>

<h2>Screenshots</h2>
<ul>
  <li><img src="screenshot-home.png" alt="Home page" width="600"></li>
  <li><img src="screenshot-product.png" alt="Product page" width="600"></li>
</ul>
<p>(Place your images at repo root or update paths.)</p>

<h2>How to Deploy</h2>
<ol>
  <li>Export DB from local (phpMyAdmin &rarr; Export).</li>
  <li>Upload files to hosting (via FTP or host panel).</li>
  <li>Import DB on server, update site URL in <code>wp_options</code> if needed.</li>
  <li>Update <code>wp-config.php</code> with server DB credentials.</li>
</ol>

<h2>License</h2>
<p>MIT (or your preferred license).</p>

<h2>Contact</h2>
<p>Author: Arian Naseri – GitHub: <a href="https://github.com/Archer667">Archer667</a></p>

</body>
</html>
