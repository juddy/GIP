<? include("/pcg/app/settings/genieConfiguration.inc.php"); ?>
/* Put this inside a @media qualifier so Netscape 4 ignores it */
@media screen { 
	/* Turn off list bullets */
	ul.mktree  li { list-style: none; margin-left:0px;} 
	/* Control how "spaced out" the tree is */
	ul.mktree, ul.mktree ul , ul.mktree li { margin-left:0px; }
	/* Provide space for our own "bullet" inside the LI */
	ul.mktree  li           .bullet { padding-left: 15px; }
	
	/* Show "bullets" in the links, depending on the class of the LI that the link's in */
	ul.mktree  li.liOpen    .bullet { cursor: pointer; background: url(<? echo URL_IMAGE_FOLDER; ?>/minus.gif)  center left no-repeat; }
	ul.mktree  li.liClosed  .bullet { cursor: pointer; background: url(<? echo URL_IMAGE_FOLDER; ?>/plus.gif)   center left no-repeat; }
	ul.mktree  li.liBullet  .bullet { cursor: default; background: url(<? echo URL_IMAGE_FOLDER; ?>/bullet.gif) center left no-repeat; }
	
	/* Sublists are visible or not based on class of parent LI */
	ul.mktree  li.liOpen    ul { cursor: pointer; display: block;  margin-left:15px;}
	ul.mktree  li.liClosed  ul { display: none; }
	
	/* Format menu items differently depending on what level of the tree they are in */
	ul.mktree  li { font-size: 12px; margin-left:0px;}
	ul.mktree  li ul li { font-size: 10px; }
	ul.mktree  li ul li ul li { font-size: 8px; }
	ul.mktree  ul li ul li ul li li { font-size: 6px; }
}