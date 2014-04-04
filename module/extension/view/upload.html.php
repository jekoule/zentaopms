<?php
/**
 * The upload view file of extension module of ZenTaoPMS.
 *
 * @copyright   Copyright 2009-2013 青岛易软天创网络科技有限公司 (QingDao Nature Easy Soft Network Technology Co,LTD www.cnezsoft.com)
 * @license     LGPL (http://www.gnu.org/licenses/lgpl.html)
 * @author      Chunsheng Wang <chunsheng@cnezsoft.com>
 * @package     extension
 * @version     $Id$
 * @link        http://www.zentao.net
 */
?>
<?php include '../../common/view/header.lite.html.php';?>
<div id='featurebar'>
  <div class='heading'><?php echo html::icon('upload') . ' ' . $lang->extension->upload;?></div>
</div>

<form method='post' enctype='multipart/form-data' style='padding: 5% 20%'>
  <div class='input-group'>
    <input type='file' name='file' class='form-control' />
    <span class='input-group-btn'><?php echo html::submitButton($lang->extension->install);?></span>
  </div>
</form>
</body>
</html>
