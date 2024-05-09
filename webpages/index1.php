<?php
	require_once('db.php');
	
	$op = $_GET['op'];
	
	$hours = (double)($_GET['hours']);
	
	$tab = $_GET['tab'];
	
	if($hours != null)
	{
		if($op==null)
			$sql = "SELECT * FROM cadets WHERE cs_hours <=> '$hours' OR ldr_hours <=> '$hours' OR activities <=> '$hours'";
		if($op == "<")
			$sql = "SELECT * FROM cadets WHERE $tab > '$hours'";
		if($op == ">")
			$sql = "SELECT * FROM cadets WHERE $tab < '$hours'";
		if($op == "=")
			$sql = "SELECT * FROM cadets WHERE $tab <=> '$hours'";
	}

	if($sql != null)
		$result = mysqli_query($conn, $sql);
?>

<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="style.css">
        <link rel="icon" type="image/png" href="_pictures/logo.png">
        <title>Search</title>
    </head>
    <body class = "search-bk">
        <div class="home-bar">
            <a class="active" href="_home.html">Home</a>
            <a href="https://secure.smore.com/3fsqx">Newsletter</a>
            <a href="https://www.twhsjrotcbooster.org">Booster Club</a>
            <a href="_calendar.html">Calendar</a>
			<a href = "_flight-rank.html">Flight Rankings</a>
            <div class="dropdown">
                <button class="dropbtn">Cadet Reasources</button>
                <span class="dropdown-content">
                    <a href = "_files/Cadet Guide.pdf">Cadet Guide</a>
                    <a href = "_files/Policy Letters.pdf">Policy Letters</a>
                    <a href = "_files/Syllabus.pdf">Syllabus</a>
                    <a href = "_announcements.html">Announcements</a>
                    <a href = "_cs-events.html">CS Events</a>
                </span>
            </div>
            <a href="_about.html">Meet The Instructors!</a>
		</div>
		<h1 style = "margin-top: 10%; text-align: center;">Search by name and flight or hours/activities!</h1>
		<a href = "index.html">Or click here to return to search by name/flight</a>
		<div class="search-bar">
                <form action="index1.php" method="get">
					<select name = "op" id = "op">
						<option value = "null"><, >, =...</option>
						<option value = "<">Greater than</option>
						<option value = ">">Less than</option>
						<option value = "=">Equal to</option> 
					</select>
					<input type="text" placeholder="Cadet Numbers (CS, LDR, Activities).." name="hours">
					<select name = "tab" id = "tab">
						<option value = "null">Value to search...</option>
						<option value = "activities">Activities</option>
						<option value = "cs_hours">Community Service Hours</option>
						<option value = "ldr_hours">LDR hours</option>
					</select>
					<button type="submit"><i class="fa fa-search"></i></button>
                </form>
        </div>
		<div class = "search">
			<table>
				<tr>
					<th class = "table-search"><h2>First Name</h2></th>
					<th class = "table-search"><h2>Last Name</h2></th>
					<th class = "table-search"><h2>Flight</h2></th>
					<th class = "table-search"><h2>Community Service Hours</h2></th>
					<th class = "table-search"><h2>LDR Hours</h2></th>
					<th class = "table-search"><h2>Activities</h2></th>
				</tr>
				<tr>
				<?php
				
					while($row = mysqli_fetch_assoc($result))
					{
				?>
				<tr>
					<td><?php echo $row['first_name'] ?></td>
					<td><?php echo $row['last_name'] ?></td>
					<td><?php echo $row['flight'] ?></td>
					<td><?php echo $row['cs_hours'] ?></td>
					<td><?php echo $row['ldr_hours'] ?></td>
					<td><?php echo $row['activities'] ?></td>
				</tr>
				<?php
					}
				?>
				</tr>
			</table>
		</div>
	</body>
</html>