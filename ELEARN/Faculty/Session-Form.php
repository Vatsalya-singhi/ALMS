<?php
session_start();
require_once 'dbconfig.php';
?>
<!DOCTYPE html>
<?php


  if(isset($_REQUEST['u'])) {
    //request is present
    $_SESSION['u'] = $_REQUEST['u'];
    $_SESSION['crefid'] = $_REQUEST['crefid'];
    $_SESSION['s'] = $_REQUEST['s'];
  }else {
    $_REQUEST['u'] = $_SESSION['u'];
    $_REQUEST['crefid'] = $_SESSION['crefid'];
    $_REQUEST['s'] = $_SESSION['s'];
  }
?>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
  <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/css/materialize.min.css'>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<style>
		header, main, footer {
			padding-left: 240px;
		  }

		  @media only screen and (max-width : 992px) {
			header, main, footer {
			  padding-left: 0;
			}
		  }
		  
	</style>
	<style>
		.hidden{
			display:none;
		}
	</style>
	<script src="https://code.jquery.com/jquery-2.1.4.js"></script>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.1.js"></script>

<script>

  //My Code
      function markHalfDone() {
		  
      var sessionID = $("#sessionID").text();
		
        $.ajax({
          url: "dependencies/helper/mark.half.helper.php",
          data: {
            "id" : sessionID
          },
          method: "POST",
          success: function(codedata) {
              console.log(codedata);
          },
          error: function() {
            
          }
        });
		return false;
      } // end of -> markHalfDone


      function markCompleteDone() {
        var sessionID = $("#sessionID").text();

        $.ajax({
          url: "dependencies/helper/mark.full.helper.php",
          data: {
            "id" : sessionID
          },
          method: "POST",
          success: function(codedata) {
              console.log(codedata);
          },
          error: function() {
           
          }
        });
		return false;
      } // end od -> markCompleteDone
</script>
 <script type="text/javascript">
var mealsByCategory = {
    Create: ["Verb","Assemble","Act","Blend","Categorize","Combine","Compile","Compose","Construct","Create","Devise","Design","Develop","Explain","Forecast","Formulate","Generate","Integrate","Invent","Improve","Imagine","Modify","Make","Organize","Originate","Perform","Plan","Prepare","Produce","Propose","Predict","Rearrange","Reconstruct","Relate","Reorganize","Revise","Rewrite","Summarize","Set up","Tell","Write"],
    Evaluate: ["Verb","Appraise","Argue","Assess","Choose","Compare","Conclude","Contrast","Criticize","Critique","Debate","Decide","Deduce","Defend","Describe","Determine","Discriminate","Evaluate","Explain","Interpret","Infer","Justify","Judge","Measure","Predict","Prioritize","Prove","Probe","Rank","Rate","Relate","Revise","Recommend","Reject","Score","Summarize", "Support","Select","Validate","Value"],
    Analyze: ["Verb","Appraise","Analyze","Arrange","Break down","Characterize","Classify","Compare","Contrast","Calculate","Criticize","Debate","Deconstruct","Deduce","Detect","Diagram","Differentiate","Discriminate","Dissect","Distinguish","Draw","Examine","Experiment","Group","Identify","Illustrate","Infer","Inquire","Inspect","Investigate","Outline","Order","Probe","Question","Relate","Research","Select","Separate","Sequence","Survey","Test"],
    Apply: ["Verb","Apply","Adapt","Change","Collect","Choose","Compute","Calculate","Construct","Draw","Dramatize","Demonstrate","Exhibit","Interview","Illustrate","Interpret","Make","Manipulate","Operate","Prepare","Produce","Practice","Role-play","Select","Show","Solve","Sequence","Transfer","Translate","Use"],
    Understand: ["Verb","Account for","Annotate","Associate","Comprehend","Convert","Conclude","Define","Defend","Describe","Distinguish","Demonstrate","Discuss","Estimate","Explain","Extend","Generalize","Gives","examples","Infer","Interpret","Identify","Illustrate","Observe","Outline","Paraphrase","Predict","Rewrite","Report","Restate","Retell","Research","Review","Recognize","Reorganize","Summarize","Translate","Tell"],
    Remember: ["Verb","Choose","Count","Cite","Define","Describe","Distinguish","Draw","Find","Group","Identify","Know","Label","List","Listen","Locate","Match","Memorize","Name","Outline","Quote","Read","Recall","Relate","Recognize","Reproduce","Repeat","Recite","Review","Record","Select","State","Sequence","Show","Sort","Tell","Underline","Write"]
}
  function changecat(cat) {
  value=cat.value;
        id=cat.id;
            var catOptions = "";
            for (categoryId in mealsByCategory[value]) {
                catOptions += "<option>" + mealsByCategory[value][categoryId] + "</option>";
            }
            document.getElementById("category".concat(id)).innerHTML = catOptions;
        }
    
</script>
	  </head>
 
    <body>
<?php include('menufac.php'); ?>
	<br>
	<br>
	
			<center>
				<form>
				<button id="start" type="submit" class="waves-effect waves-light btn green light-2"  onclick="markHalfDone()">Start Session</button>
				<script type="text/javascript">
							$("#start").click(function(e) {
								e.preventDefault();
					  $("div").removeClass("hidden");
					  return false;
					});
				</script>
				</form>
			</center>
			<br>
<!--||||||||||||||||||||||||||||||||||||||||||||||||||SESSION START||||||||||||||||||||||||||||||||||||||||||||||||||-->
<div class="hidden" >
<form method="POST" action="sessionform.php" id="formValidate">
		
	
				  <div class="container">

<h5>Learning Plan</h5>
			
	<div class="row">
					  <div class="input-field col s4">
					  <input type="number" id="lp-row-num" placeholder="Enter no. of learning plans">
					  <a class="waves-effect waves-teal btn blue" id="lp">Submit</a>
					  </div>
				  </div>
				  	<table class="highlight">
						 <thead> <tr>  <th>Time</th>  <th>Activity</th><th>Topic</th><th>Level</th><th></th>          </tr>        </thead>
						 <tbody id="lptable">
						 </tbody>
					</table>
				<script text="javascript">function myfunction(string){str=string.value;id=string.id; 
					if (str=="Quiz"){document.getElementById("uploadinsert".concat(id)).innerHTML = '<a href="../quiz/muifrontend.php?q='+(id*1+1)+'" target="_blank" class="waves-effect waves-light btn-flat red lighten-1" id="quizmaterial" style="color:white">Quiz</a>';}else{document.getElementById("uploadinsert".concat(id)).innerHTML = '<a href="http://localhost:8080" target="_blank" class="waves-effect waves-light btn-flat orange lighten-1" style="color:white" id="quizmaterial">Material</a>';}}</script>
					<script>
				 $('#lp').on('click', generate);

					function generate(e) {
					  var rows = $('#lp-row-num').val();
					  var html = '';
					  for (var i = 0; i < rows; i++) {
						html += '<TR>	 <TD class="input-field col s12"><SELECT name="time[]" class="browser-default" id="time"><option>Time</option><option>5 min</option><option>10 min</option><option>15 min</option><option>20 min</option></SELECT></TD><TD class="input-field col s12"><select class="browser-default" name="activity[]" id="'+i+'" onchange="myfunction(this);"><option>Activity</option><option click="quizbutton()">Quiz</option><option value="localhost:8080" id="material" >Material</option></select></TD><TD class="input-field col s12"><INPUT id="topic" name="topic[]" placeholder="Topic" type="text" /></TD><TD class="input-field col s12"><SELECT class="browser-default" name ="planlevel[]" id ="level" ><option>Level</option><option>Level 1</option><option>Level 2</option><option>Level 3</option></SELECT></TD><TD id="uploadinsert'+i+'" ></TD></TR>';

					  
					  }
					  $('#lptable').html(html);
					}     
					</script>
				</div>
			
			<br>
			<br>
			<br>
		  <center>
			<button class="btn waves-effect waves-light green" onclick="markCompleteDone()" type="submit" name="submit">Submit
			<i class="material-icons right">send</i>
		     </button>
		  </center>
		  </form>
		  <br>
		  <br>
		  <br>
	</div>

		  
      <!--Import jQuery before materialize.js-->
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/js/materialize.min.js'></script>
        
		  <script>   
				$('.button-collapse').sideNav({
					  menuWidth: 300, // Default is 240
					  edge: 'left', // Choose the horizontal origin
					  closeOnClick: true // Closes side-nav on <a> clicks, useful for Angular/Meteor
					}
				  );

		  </script> 
		  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		  <?php
  echo "<p class=\"hidden\" id=\"sessionID\" >".$_REQUEST['crefid']."U".$_REQUEST['u']."S".$_REQUEST['s']."</p>";
?>
	</body>
  </html>