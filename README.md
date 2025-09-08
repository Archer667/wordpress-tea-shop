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

<h2>Screenshots</h2>
<ul>
  <img width="1919" height="988" alt="Screenshot 2025-09-08 092758" src="https://github.com/user-attachments/assets/8b47d025-86e5-4451-b74e-ecf5ea5e5b58" />
  <img width="1919" height="990" alt="Screenshot 2025-09-08 092724" src="https://github.com/user-attachments/assets/48e27cda-8425-4cab-b5a9-52339df708c5" />
  <img width="1911" height="985" alt="Screenshot 2025-09-08 092707" src="https://github.com/user-attachments/assets/b65094d1-5977-43fc-b8a4-a64bbf10df9b" />
  <img width="1911" height="990" alt="Screenshot 2025-09-08 092612" src="https://github.com/user-attachments/assets/e6885dc6-c6e0-4dd5-a482-d98275abc936" />
  <img width="1919" height="992" alt="Screenshot 2025-09-08 092508" src="https://github.com/user-attachments/assets/c6f45377-e009-46de-95a4-6723d2739d17" />
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
