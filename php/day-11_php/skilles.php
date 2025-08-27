<?PHP
  //  $skills1 = array("","","","","","",) ;
  $skills1 = $_POST["skills1"];
  $skills2 = $_POST["skills2"];
  $skills3 = $_POST["skills3"];
  $skills4 = $_POST["skills4"];
  $skills5 = $_POST["skills5"];
  $skills6 = $_POST["skills6"];
  $skills7 = $_POST["skills7"];
  $skills8 = $_POST["skills8"];
  $skills9 = $_POST["skills9"];
  $skills10 = $_POST["skills10"];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<style>
     /* skils */
.skills-section {
  padding: 5px  12% ;
  color: #a78787;
  /* text-align: center; */
}

.skills-section h2 {
  font-size: 2.5rem;
  color: rgb(150, 89, 230);
  margin-bottom: 50px;
}

.skills-grid {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  gap: 15px;
}

.skill-badge {
  background-color: #e9d1d169;
  padding: 10px 30px;
  border-radius: 20px;
  color: #050505ff;
  font-size: 0.95rem;
  /* border: 1px solid #0df8e15e; */
  transition: all 0.3s ease;
  box-shadow: 0 0 15px rgb(150, 89, 230);
      transition: background 0.3s ease;
    transition: background-color 0.3s ease, box-shadow 0.3s ease;
    box-shadow: 0 5px 12px rgba(0, 0, 0, 0.543);
}

.skill-badge:hover {
  /* background-color: rgb(150, 89, 230); */
  color: #000000;
  box-shadow: 0 0 15px rgba(28, 221, 44, 0.973);
}
</style>
<body>
    <section id="skills" class="skills-section">
            <h2> Skills-📲 </h2>
            <div class="skills-grid">
                <!-- 🧰 Skills List -->
                <span class="skill-badge"><?php echo $skills1 ?></span>
                <span class="skill-badge"><?php echo $skills2 ?></span>
                <span class="skill-badge"><?php echo $skills3 ?></span>
                <span class="skill-badge"><?php echo $skills4 ?></span>
                <span class="skill-badge"><?php echo $skills5 ?></span>
                <span class="skill-badge"><?php echo $skills6 ?></span>
                <span class="skill-badge"><?php echo $skills7 ?></span>
                <span class="skill-badge"><?php echo $skills8 ?></span>
                <span class="skill-badge"><?php echo $skills9 ?></span>
                <span class="skill-badge"><?php echo $skills10 ?></span>
              
            </div>
        </section>
    
</body>
</html>
<hr>


<?php
function getSkills($totalSkills = 10) {
    $skills = [];
    for ($i = 1; $i <= $totalSkills; $i++) {
        if (!empty($_POST["skills$i"])) {
            $skills[] = htmlspecialchars($_POST["skills$i"]);
        }
    }
    return $skills;
}

$skillsList = getSkills(10);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skills</title>
    <style>
        /* Skills Section */
        .skills-section {
            padding: 5px 12%;
            color: #a78787;
        }
        .skills-section h2 {
            font-size: 2.5rem;
            color: rgb(150, 89, 230);
            margin-bottom: 50px;
        }
        .skills-grid {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 15px;
        }
        .skill-badge {
            background-color: #e9d1d169;
            padding: 10px 30px;
            border-radius: 20px;
            color: #050505ff;
            font-size: 0.95rem;
            box-shadow: 0 5px 12px rgba(0, 0, 0, 0.543);
            transition: background-color 0.3s ease, box-shadow 0.3s ease;
        }
        .skill-badge:hover {
            color: #000000;
            box-shadow: 0 0 15px rgba(28, 221, 44, 0.973);
        }
    </style>
</head>
<body>
    <section id="skills" class="skills-section">
        <h2>Skills-📲</h2>
        <div class="skills-grid">
            <?php foreach ($skillsList as $skill): ?>
                <span class="skill-badge"><?php echo $skill; ?></span>
            <?php endforeach; ?>
        </div>
    </section>
</body>
</html>
