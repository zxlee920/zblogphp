<div class="post" id="divCommentPost">
	<p class="posttop"><a name="comment"><#msg024#>:</a><small><a rel="nofollow" id="cancel-reply" href="#divCommentPost" style="display:none;"><#msg264#><#msg149#></a></small></p>
	<form id="frmSumbit" target="_self" method="post" action="<#article/commentposturl#>" >
	<input type="hidden" name="inpId" id="inpId" value="<#article/id#>" />
	<input type="hidden" name="inpArticle" id="inpArticle" value="" />
	<input type="hidden" name="inpRevID" id="inpRevID" value="" />
	<p><input type="text" name="inpName" id="inpName" class="text" value="" size="28" tabindex="1" /> <label for="inpName"><#msg001#>(*)</label></p>
	<p><input type="text" name="inpEmail" id="inpEmail" class="text" value="" size="28" tabindex="2" /> <label for="inpEmail"><#msg053#></label></p>
	<p><input type="text" name="inpHomePage" id="inpHomePage" class="text" value="" size="28" tabindex="3" /> <label for="inpHomePage"><#msg054#></label></p>
<#template:article_commentpost-verify:begin#>
	<p><input type="text" name="inpVerify" id="inpVerify" class="text" value="" size="28" tabindex="4" /> <label for="inpVerify"><#msg089#>(*)</label> <img style="border:1px solid silver;width:<#ZC_VERIFYCODE_WIDTH#>px;height:<#ZC_VERIFYCODE_HEIGHT#>px;" src="{$host}zb_system/function/c_validcode.php?name=commentvalid" alt="" title=""/></p>
<#template:article_commentpost-verify:end#>
	<p><label for="txaArticle"><#msg055#>(*)(<#msg056#>:<#ZC_CONTENT_MAX#>)</label></p>
	<p><textarea name="txaArticle" id="txaArticle" onchange="GetActiveText(this.id);" onclick="GetActiveText(this.id);" onfocus="GetActiveText(this.id);" class="text" cols="50" rows="4" tabindex="5" ></textarea></p>
	<p><input name="btnSumbit" type="submit" tabindex="6" value="<#msg087#>" onclick="JavaScript:return VerifyMessage()" class="button" /> <input type="checkbox" name="chkRemember" value="1" id="chkRemember" /> <label for="chkRemember"><#msg049#></label></p>
	<script language="JavaScript" type="text/javascript">objActive="txaArticle";ExportUbbFrame();</script>
	</form>
	<p class="postbottom"><#msg040#></p>
	<script language="JavaScript" type="text/javascript">LoadRememberInfo();</script>
</div>