﻿<?php include "../../shared/head.php" ?>
  </head>
  
  <body>
    <div class="container"><!-- Centres content and sets fixed width to suit device -->
<?php include "../../shared/banners/choose_banner.php" ?>
<?php include "../../shared/banners/show_banner.php" ?>
<?php include "../../shared/menu.php" ?>
      <div class="row">
        <div class="col-md-12">
          <h1>Download > Source</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-4">
          <br>
<?php 
$file_path = '../../files/OR_X_source.zip';
echo "<a href='$file_path' class='btn download_button btn-lg btn-block'>";        
?>
            <h2><span class='glyphicon glyphicon-download'></span> &nbsp; Download the source code</h2>
            <p>
              This source matches the Supporters' Download.
            </p>
          </a>
          <p style="text-align: center;">
<?php 
echo 'Date: ' . date('d-M-Y', filemtime($file_path)) . '&nbsp; &nbsp; &nbsp; Size: ' . round(filesize($file_path) / 1024 / 1024) . 'MB'; ?>
          </p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
<h2>Inspecting The Source</h2>
<p>
Open Rails's source code is arranged as a Visual Studio solution which can be built with the free Visual C# Express 2010, 2012 and 2013 products and the commercial Visual Studio 2010, 2012 and 2013 products.
</p>
<h2>License Requirements</h2>
<p>
One of the ways that the <a href="../../discover/license/">Free Software License (GPL)</a> protects our rights is by requiring everyone who distributes software under the GPL
to make the source available also. That way, everyone who uses the software can examine it and customize it if they wish. 
</p>
<h2>Subversion (SVN) Software Versioning Control System</h2>
<p>
The entire history of project development is archived in our SVN repository, so visitors are able to extract, not just the current
version, but all the previous ones too back to version 1 in December 2009. 
</p><p>
For access details, see <a href="../../contribute/developing-code/">Contribute > Code</a>.
</p>
        </div>
      </div>
<?php include "../../shared/tail.php" ?>
<?php include "../../shared/banners/preload_next_banner.php" ?>
  </body>
</html>