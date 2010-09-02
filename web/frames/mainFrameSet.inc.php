
<frameset rows="45,*" cols="*" frameborder="yes" bordercolor="#FFFFFF">

  <frame name="topFrame" src="<? echo PAGE_FRAME_TOP_BAR; ?>"  scrolling="NO" noresize >
  
  <frameset cols="165,*" frameborder="no">
    <frame name="leftnav" src="<? echo PAGE_FRAME_LEFT_BAR; ?>"   frameborder="1" />
    <frameset rows="32,*" cols="*" frameborder="no">
      <frame name="genChooser" src="<? echo PAGE_FRAME_RIGHT_GEN_CHOOSER; ?>" scrolling="NO" noresize>
      <frame name="mainWindow" src="<?php echo PAGE_FRAME_RIGHT_MAINDESCRIPTION; ?>" >
    </frameset>
  </frameset>

    <noframes>
        <body bgcolor="#FFFFFF">
            <p>
            
            <H2><? echo LANG_INTERNALS_FRAMES_NEEDED; ?></H2>
            <? echo LANG_INTERNALS_FRAMES_NEEDED_DESC; ?>
        </body>
    </noframes>
</frameset>