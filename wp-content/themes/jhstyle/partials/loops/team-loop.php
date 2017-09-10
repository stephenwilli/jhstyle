<?php if( have_rows('team_member') ): while ( have_rows('team_member') ) : the_row(); 

$teamPhoto = get_sub_field('team_photo');
$teamName = get_sub_field('team_name');
$teamPosition = get_sub_field('team_position');
$teamEmail = get_sub_field('team_email');
$teamDescription = get_sub_field('team_description');

?>

     <div class="col-sm-3">
     	<div class="team-wrap">
	     <img src="<?php echo $teamPhoto['sizes']['cover'];?>" alt="<?php echo $teamName;?>"/>
	     <h3><?php echo $teamName;?></h3>
	     <h5><?php echo $teamPosition;?></h5>
	     <h5><span><i class="fa fa-fw fa-envelope"></i> <?php echo $teamEmail;?></span></h5>
	     <p><?php echo $teamDescription; ?></p>
	    </div>
     </div>


<?php endwhile; endif; ?>