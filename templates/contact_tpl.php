<script type="text/javascript">
    // JavaScript Document
    function re_capcha()
    {
        document.getElementById('vimg').src = "./captcha_image.php";
    }
</script>
<div class="inner_contact p-4 mt-4">
    <div class="tcat">
        <div class="icon">
            <?= _lienhe ?>
        </div>
    </div>
    <div class="content">
		<div class="post-share" style="margin-top:10px;">
			<div class="addthis_sharing_toolbox"></div>
		</div>
        <div class="clear" style="height:20px;"></div>
        <div class="row">
            <div class="col-md-6 col-sm-12 col-xs-12">
                <?= $company_contact['noidung']; ?>	
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12">
                <form method="post" name="frm" class="forms" action="">
                    <div class="tit"><?=_thongtinlienhe?></div>    
                    <div class="tbl-contacts">
                        <div class="form-group">
                            <input type="text" class="form-control" name="ten" id="ten" placeholder="<?= _hovaten ?>" required oninvalid="this.setCustomValidity('<?= _hotengui ?>')" oninput="setCustomValidity('')">
                        </div>                        
                        <div class="form-group">
                            <input type="text" class="form-control" name="diachi" id="diachi" placeholder="<?= _diachi ?>" required oninvalid="this.setCustomValidity('<?= _diachi ?>')" oninput="setCustomValidity('')">
                        </div>
                        <div class="form-group">
                        <input type="tel" pattern="[0][0-9]{9,10}" min="10" max="13" class="form-control" name="dienthoai" id="dienthoai" placeholder="<?=_sodienthoai?>" value="" required oninvalid="this.setCustomValidity('<?=_sodienthoai?>')" oninput="setCustomValidity('')">
                    </div>
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Email" required oninvalid="this.setCustomValidity('<?= _emailgui ?>')" oninput="setCustomValidity('')"></div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="tieude1" id="tieude1" placeholder="<?= _chude ?>" required oninvalid="this.setCustomValidity('<?= _chudegui ?>')" oninput="setCustomValidity('')">
                        </div>                         
                        <div class="form-group">
                            <textarea name="noidung" id="noidung" class="form-control" rows="3" required oninvalid="this.setCustomValidity('<?= _noidunggui ?>')" oninput="setCustomValidity('')"></textarea>
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-success send" onclick="">
                                <?= _gui ?></button>

                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>