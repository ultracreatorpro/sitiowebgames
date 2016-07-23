<?php
// Attogram Framework - Games Module - Home v0.0.5

namespace Attogram;

$this->pageHeader('Games');

echo '<h1>',$this->siteName,' <small>',GAMES_SITE_VERSION,'</small></h1>

<div class="container-fluid" style="background-color:#030303;">


<div class="row hprow">

 <div class="col-sm-3 hpcol" style="background-color:black;">
  <a href="pond/"><img src="web/pond/logo.png" class="ihlite" width="100" height="100" alt="The Pond"></a>
  <br /><br /><a href="pond/" class="hlite">The Pond &nbsp;
  <br /><small>A narrow fellow in the Pond</small></a>
 </div>

 <div class="col-sm-3 hpcol" style="background-color:black;">
  <a href="hextris/"><img src="web/hextris/logo.png" class="ihlite" width="100" height="100" alt="Hextris"></a>
  <br /><br /><a href="hextris/" class="hlite">Hextris</a>
 </div>

 <div class="col-sm-3 hpcol" style="background-color:black;">
  <a href="particle-clicker/"><img src="web/particle-clicker/logo.png" class="ihlite" width="100" height="100" alt="Particle Clicker"></a>
  <br /><br /><a href="particle-clicker/" class="hlite">Particle Clicker</a>
 </div>

 <div class="col-sm-3 hpcol" style="background-color:black;">
  <a href="candyjam/"><img src="web/candyjam/logo.png" class="ihlite" width="100" width="100" alt="Candy Jam"></a>
  <br /><br /><a href="candyjam/" class="hlite">Dental Defender &nbsp;
  <br /><small>Saga of the Candy Horde</small></a>
 </div>

</div>
<div class="row hprow">

 <div class="col-sm-3 hpcol" style="background-color:black;">
  <a href="polybranch/"><img src="web/polybranch/logo.png" class="ihlite" width="100" height="100" alt="PolyBranch"></a>
  <br /><br /><a href="polybranch/" class="hlite">PolyBranch</a>
 </div>

 <div class="col-sm-3 hpcol" style="background-color:black;">
  <a href="8queens/"><img src="web/8queens/logo.png" class="ihlite" width="100" height="100" alt="8 Queens"></a>
  <br /><br /><a href="8queens/" class="hlite">8 Queens &nbsp;
  <br /><small>Chess Puzzle</small></a>
 </div>


 <div class="col-sm-3 hpcol">coming soon...</div>
 <div class="col-sm-3 hpcol">coming soon...</div>
</div>
';

echo '</div>';

$this->pageFooter();
