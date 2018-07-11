	<!--Fix the menubar on top even while scrolling-->

	<nav class="navbar navbar-inverse" data-spy="affix" data-offset-top="90">
	  <div class="container-fluid">
		<div class="navbar-header">
		  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>                        
		  </button>
		  <a class="navbar-brand" href="index.php">ENGINEERING SPACE</a>
		</div>
		<div class="collapse navbar-collapse" id="myNavbar">
		  <ul class="nav navbar-nav">
			<li class="active"><a href="index.php"><i class="glyphicon glyphicon-home"></i> Home</a></li>
			<li class="dropdown">
			  <a class="dropdown-toggle" data-toggle="dropdown" href="#">Syllabus <span class="caret"></span></a>
			  <ul class="dropdown-menu">
					<li><a href="?syllabus_bct">BCT</a></li>
					<li><a href="?syllabus_bce">BCE</a></li>
					<li><a href="?syllabus_bel">BEL</a></li>
					<li><a href="?syllabus_bex">BEX</a></li>
					<li><a href="?syllabus_arch">ARCH.</a></li>
			  </ul>
			</li>
			<li class="dropdown">
			  <a class="dropdown-toggle" data-toggle="dropdown" href="#">Old Questions <span class="caret"></span></a>
			  <ul class="dropdown-menu">
					<li><a href="?questions_bct">BCT</a></li>
					<li><a href="?questions_bce">BCE</a></li>
					<li><a href="?questions_bel">BEL</a></li>
					<li><a href="?questions_bex">BEX</a></li>
					<li><a href="?questions_arch">ARCH.</a></li>
			  </ul>
			</li>
			<li class="dropdown">
			  <a class="dropdown-toggle" data-toggle="dropdown" href="#">Notes <span class="caret"></span></a>
			  <ul class="dropdown-menu">
					<li><a href="?notes_bct">BCT</a></li>
					<li><a href="?notes_bce">BCE</a></li>
					<li><a href="?notes_bel">BEL</a></li>
					<li><a href="?notes_bex">BEX</a></li>
					<li><a href="?notes_arch">ARCH.</a></li>
			  </ul>
			</li>
			<li class="dropdown">
			  <a class="dropdown-toggle" data-toggle="dropdown" href="#">Slides <span class="caret"></span></a>
			  <ul class="dropdown-menu">
					<li><a href="?slides_bct">BCT</a></li>
					<li><a href="?slides_bce">BCE</a></li>
					<li><a href="?slides_bel">BEL</a></li>
					<li><a href="?slides_bex">BEX</a></li>
					<li><a href="?slides_arch">ARCH.</a></li>
			  </ul>
			</li>
			<li class="dropdown">
			  <a class="dropdown-toggle" data-toggle="dropdown" href="#">Feedback <span class="caret"></span></a>
			  <ul class="dropdown-menu">
					<li><a href="?feedback_bct">BCT</a></li>
					<li><a href="?feedback_bce">BCE</a></li>
					<li><a href="?feedback_bel">BEL</a></li>
					<li><a href="?feedback_bex">BEX</a></li>
					<li><a href="?feedback_arch">ARCH.</a></li>
			  </ul>
			</li>
		  </ul>
		  <ul class="nav navbar-nav navbar-right">
			<?php if(logged_in() != true){ ?>
			<li><a href="" data-toggle="modal" data-target="#myModalsignUp"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
			<li><a href="" data-toggle="modal" data-target="#myModalsignIn" id="loginBtnJ"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
			<?php }else{ ?>
			<li><a href="?profile" ><span class="glyphicon glyphicon-user"></span> Profile</a></li>
			<li><a href="logout.php" ><span class="glyphicon glyphicon-log-in"></span> Log Out</a></li>
			<?php } ?>
		  </ul>
		</div>
	  </div>
	</nav>
  
<div class="container">
  <?php 		//SYLLABUS
    if(isset($_REQUEST['syllabus_bct'])){
      include 'syllabus_bct.php';
    }else if(isset($_REQUEST['syllabus_bce'])){
      include 'syllabus_bce.php';
    }else if(isset($_REQUEST['syllabus_bel'])){
      include 'syllabus_bel.php';
    }else if(isset($_REQUEST['syllabus_bex'])){
      include 'syllabus_bex.php';
    }else if(isset($_REQUEST['syllabus_arch'])){
      include 'syllabus_arch.php';
    }			//OLD QUESTIONS
	else if(isset($_REQUEST['questions_bct'])){
      include 'questions_bct.php';
    }else if(isset($_REQUEST['questions_bce'])){
      include 'questions_bce.php';
    }else if(isset($_REQUEST['questions_bel'])){
      include 'questions_bel.php';
    }else if(isset($_REQUEST['questions_bex'])){
      include 'questions_bex.php';
    }else if(isset($_REQUEST['questions_arch'])){
      include 'questions_arch.php';
    }			//NOTES
	else if(isset($_REQUEST['notes_bct'])){
      include 'notes_bct.php';
    }else if(isset($_REQUEST['notes_bce'])){
      include 'notes_bce.php';
    }else if(isset($_REQUEST['notes_bel'])){
      include 'notes_bel.php';
    }else if(isset($_REQUEST['notes_bex'])){
      include 'notes_bex.php';
    }else if(isset($_REQUEST['notes_arch'])){
      include 'notes_arch.php';
	}			//SLIDES
	else if(isset($_REQUEST['slides_bct'])){
      include 'slides_bct.php';
    }else if(isset($_REQUEST['slides_bce'])){
      include 'slides_bce.php';
    }else if(isset($_REQUEST['slides_bel'])){
      include 'slides_bel.php';
    }else if(isset($_REQUEST['slides_bex'])){
      include 'slides_bex.php';
    }else if(isset($_REQUEST['slides_arch'])){
      include 'slides_arch.php';
    }			//FEEDBACK
	else if(isset($_REQUEST['feedback_bct'])){
      include 'feedback_bct.php';
    }else if(isset($_REQUEST['feedback_bce'])){
      include 'feedback_bce.php';
    }else if(isset($_REQUEST['feedback_bel'])){
      include 'feedback_bel.php';
    }else if(isset($_REQUEST['feedback_bex'])){
      include 'feedback_bex.php';
    }else if(isset($_REQUEST['feedback_arch'])){
      include 'feedback_arch.php';
	}
			//BCT/SYLLABUS/sembtn
	else if(isset($_REQUEST['bcty1sylb'])){
      include 'bcty1sylb.php';
    }else if(isset($_REQUEST['bcty2sylb'])){
      include 'bcty2sylb.php';
    }else if(isset($_REQUEST['bcty3sylb'])){
      include 'bcty3sylb.php';
    }else if(isset($_REQUEST['bcty4sylb'])){
      include 'bcty4sylb.php';
    }
			//BCT/OLD QUESTIONS
	else if(isset($_REQUEST['bcty1old'])){
      include 'bcty1old.php';
    }else if(isset($_REQUEST['bcty2old'])){
      include 'bcty2old.php';
    }else if(isset($_REQUEST['bcty3old'])){
      include 'bcty3old.php';
    }else if(isset($_REQUEST['bcty4old'])){
      include 'bcty4old.php';
    }
			//BCT/NOTES
	else if(isset($_REQUEST['bcty1note'])){
      include 'bcty1note.php';
    }else if(isset($_REQUEST['bcty2note'])){
      include 'bcty2note.php';
    }else if(isset($_REQUEST['bcty3note'])){
      include 'bcty3note.php';
    }else if(isset($_REQUEST['bcty4note'])){
      include 'bcty4note.php';
    }
			//BCT/SLIDES
	else if(isset($_REQUEST['bcty1slide'])){
      include 'bcty1slide.php';
    }else if(isset($_REQUEST['bcty2slide'])){
      include 'bcty2slide.php';
    }else if(isset($_REQUEST['bcty3slide'])){
      include 'bcty3slide.php';
    }else if(isset($_REQUEST['bcty4slide'])){
      include 'bcty4slide.php';
    }
			//BCT/FEEDBACK
	else if(isset($_REQUEST['bcty1feed'])){
      include 'bcty1feed.php';
    }else if(isset($_REQUEST['bcty2feed'])){
      include 'bcty2feed.php';
    }else if(isset($_REQUEST['bcty3feed'])){
      include 'bcty3feed.php';
    }else if(isset($_REQUEST['bcty4feed'])){
			//BCT/OLD-QUESTIONS/YEAR I
      include 'bcty4feed.php';
    }
			//BCT/SYLLABUS/YEAR I
	else if(isset($_REQUEST['bcty1p1sylb'])){
      include 'bcty1p1sylb.php';
    }else if(isset($_REQUEST['bcty1p2sylb'])){
      include 'bcty1p2sylb.php';
    }
			//BCT/SYLLABUS/YEAR II
	else if(isset($_REQUEST['bcty2p1sylb'])){
      include 'bcty2p1sylb.php';
    }else if(isset($_REQUEST['bcty2p2sylb'])){
      include 'bcty2p2sylb.php';
    }
			//BCT/SYLLABUS/YEAR III
	else if(isset($_REQUEST['bcty3p1sylb'])){
      include 'bcty3p1sylb.php';
    }else if(isset($_REQUEST['bcty3p2sylb'])){
      include 'bcty3p2sylb.php';
    }
			//BCT/SYLLABUS/YEAR IV
	else if(isset($_REQUEST['bcty4p1sylb'])){
      include 'bcty4p1sylb.php';
    }else if(isset($_REQUEST['bcty4p2sylb'])){
      include 'bcty4p2sylb.php';
    }
			//BCT/OLD-QUESTIONS/YEAR I
	else if(isset($_REQUEST['bcty1p1old'])){
      include 'bcty1p1old.php';
    }else if(isset($_REQUEST['bcty1p2old'])){
      include 'bcty1p2old.php';
    }
			//BCT/OLD-QUESTIONS/YEAR II
	else if(isset($_REQUEST['bcty2p1old'])){
      include 'bcty2p1old.php';
    }else if(isset($_REQUEST['bcty2p2old'])){
      include 'bcty2p2old.php';
    }
			//BCT/OLD-QUESTIONS/YEAR III
	else if(isset($_REQUEST['bcty3p1old'])){
      include 'bcty3p1old.php';
    }else if(isset($_REQUEST['bcty3p2old'])){
      include 'bcty3p2old.php';
    }
			//BCT/OLD-QUESTIONS/YEAR IV
	else if(isset($_REQUEST['bcty4p1old'])){
      include 'bcty4p1old.php';
    }else if(isset($_REQUEST['bcty4p2old'])){
     include 'bcty4p2old.php';
    }
			//BCT/NOTES/YEAR I
	else if(isset($_REQUEST['bcty1p1note'])){
      include 'bcty1p1note.php';
    }else if(isset($_REQUEST['bcty1p2note'])){
      include 'bcty1p2note.php';
    }
			//BCT/NOTES/YEAR II
	else if(isset($_REQUEST['bcty2p1note'])){
      include 'bcty2p1note.php';
    }else if(isset($_REQUEST['bcty2p2note'])){
      include 'bcty2p2note.php';
    }
			//BCT/NOTES/YEAR III
	else if(isset($_REQUEST['bcty3p1note'])){
      include 'bcty3p1note.php';
    }else if(isset($_REQUEST['bcty3p2note'])){
      include 'bcty3p2note.php';
    }
			//BCT/NOTES/YEAR IV
	else if(isset($_REQUEST['bcty4p1note'])){
      include 'bcty4p1note.php';
    }else if(isset($_REQUEST['bcty4p2note'])){
      include 'bcty4p2note.php';
    }
			//BCT/SLIDES/YEAR I
	else if(isset($_REQUEST['bcty1p1slide'])){
      include 'bcty1p1slide.php';
    }else if(isset($_REQUEST['bcty1p2slide'])){
      include 'bcty1p2slide.php';
    }
			//BCT/SLIDES/YEAR II
	else if(isset($_REQUEST['bcty2p1slide'])){
      include 'bcty2p1slide.php';
    }else if(isset($_REQUEST['bcty2p2slide'])){
      include 'bcty2p2slide.php';
    }
			//BCT/SLIDES/YEAR III
	else if(isset($_REQUEST['bcty3p1slide'])){
      include 'bcty3p1slide.php';
    }else if(isset($_REQUEST['bcty3p2slide'])){
      include 'bcty3p2slide.php';
    }
			//BCT/SLIDES/YEAR IV
	else if(isset($_REQUEST['bcty4p1slide'])){
      include 'bcty4p1slide.php';
    }else if(isset($_REQUEST['bcty4p2slide'])){
      include 'bcty4p2slide.php';
    }
			//BCT/FEEDBACKS/YEAR I
	else if(isset($_REQUEST['bcty1p1feed'])){
      include 'bcty1p1feed.php';
    }else if(isset($_REQUEST['bcty1p2feed'])){
      include 'bcty1p2feed.php';
    }
			//BCT/FEEDBACKS/YEAR II
	else if(isset($_REQUEST['bcty2p1feed'])){
      include 'bcty2p1feed.php';
    }else if(isset($_REQUEST['bcty2p2feed'])){
      include 'bcty2p2feed.php';
    }
			//BCT/FEEDBACKS/YEAR III
	else if(isset($_REQUEST['bcty3p1feed'])){
      include 'bcty3p1feed.php';
    }else if(isset($_REQUEST['bcty3p2feed'])){
      include 'bcty3p2feed.php';
    }
			//BCT/FEEDBACKS/YEAR IV
	else if(isset($_REQUEST['bcty4p1feed'])){
      include 'bcty4p1feed.php';
    }else if(isset($_REQUEST['bcty4p2feed'])){
      include 'bcty4p2feed.php';
    }
			//BCT/FEEDBACKS/YEAR I/PART I/MATHEMATICS
	else if(isset($_REQUEST['bcty1p1mfeed'])){
		include'bcty1p1mfeed.php';
	}
	else if(isset($_REQUEST['questionsaved'])){
		include'bcty1p1mfeed.php';
	}

	else if(isset($_REQUEST['commentsend'])){
		include'bcty1p1mfeed.php';
	}
	
	else if(isset($_REQUEST['upnotebcty1p1m'])){
		include'upnotebcty1p1m.php';
	} 
	else if(isset($_REQUEST['profile'])){
      if(logged_in() != true){
        include 'homepage.php';
    }
	
	  else{
        include 'profiledup.php';
      }

    }else{
      include 'homepage.php';
    }
  ?>

</div>