<style>

	.secondary_text {
		text-align: right;
		font-style: italic;
	}		
</style>

<?php
    $comentarii = Query_Select("SELECT * FROM messages WHERE 1");
?>
<br><br>
    <div class="container">
		<div class="row animate-box">
			<div class="col-md-12 col-md-offset-0 text-center fh5co-heading ">
				<h2>
                    <span> Mesaje - <?=Count($comentarii)?></span>     
                </h2>
			</div>
		</div>
	</div>
    
  

<?php
    foreach($comentarii as $comentariu)
    {
        ?>
        <div class="blog-text col-md-12 col-md-offset-0 text-center fh5co-heading" style="background-color: #E7E7E8">
            <div class="card">
                <?php
                        if(login())
                        {
                            if(isAdmin(login()))
                            {
                                ?>
                                <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
                                    <div class="form-group row" style="text-align: left">
                                        <button type="button" id="submit" class="btn btn-primary" onclick="<?php $smth = $link->prepare("DELETE FROM messages WHERE id ={$comentariu['id']};"); $smth->execute(); ?>"><i class="fas fa-trash-alt">

                                        </i></button>
                                    </div>
                                <?php
                            }
                        }
                ?>
                <br>
                <div class="card-body">
                    <h1 class="card-text">
                        <?=nl2br($comentariu['message'])?>
                    </h1>
                    <h5 class="secondary_text">
                        - <?=$comentariu['lastname']?> <?=$comentariu['firstname']?>, <?=$comentariu['email']?>
                        <div class="card-footer text-muted" style="text-align: right">
                            <?=$comentariu['date']?>
                        </div>
                    </h5>
                    
               
                </div>
                
            </div>
        </div>
        <?php
    }
?>