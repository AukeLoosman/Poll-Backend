<html>
<head>
</head>
<body>
  <div id="home">
    <h1 align="center">
        Main Menu
    </h1>
    <div class="card">
        <h4 class="card-header">Dashboard</h4>
        <div class="card-body">

        </div>
    </div>
  </div>

  <div id="accounts">
    <h1 align="center">
        Edit Portfolio!
    </h1>
    <div class="card">
        <h4 class="card-header">Dashboard</h4>
        <div class="card-body">

        </div>
    </div>
  </div>

  <div id="edit_portfolio">
    <h1 align="center">
        Edit Portfolio
    </h1>
      <div id="form">
    <form id="search_form" class="form_dash">
      <div class="container">
        <h2 align="center">Search</h2>
        <input id="searchUser" type="text" placeholder="Enter Username" name="searchUser" required>
        <br>
        <input id="searchBtn" class="Button_Style" type="submit" name="submit" value="submit"></input>
      </div>
    </form>
  </div>
  <div id="Table">
    <table style="width:100%">
  <tr>
    <th>UID</th>
    <th>Username</th>
    <th>Portfolio</th>
    <th>submit</th>
  </tr>
</table>
</div>
  </div>

  <div id="current_bets">
    <h1 align="center">
        Current bets
    </h1>
    <div class="card">
        <h4 class="card-header">Dashboard</h4>
        <div class="card-body">

        </div>
    </div>
  </div>

  <div id="Poulle">
    <h1 align="center">
        Poulle
    </h1>
    <div class="card">
        <h4 class="card-header">Dashboard</h4>
        <div class="card-body">

        </div>
    </div>
  </div>

  <div id="new_team">
    <br>
        <h4 align="center" id="THeader" class="card-header">Teams</h4>
        <br>
        <button id="Add_Team"  class="Button_Style">Add Team</button>
        <br><br>
          <div id="Team_Table" >
            <table style="width:100%">
          <tr>
            <th>Team</th>
            <th>Strength</th>
            <th>Defence</th>
            <th>Agility</th>
          </tr>
        </table>
        </div>
    <div id="myModal" class="modal">

      <!-- Modal content -->
      <div class="modal-content">
        <span id="close">&times;</span>
        <div id="Team_Form">
      <form id="Tform" class="form_dash">
        <div class="container">
          <h2 align="center">Add Team</h2>
          <input id="TeamName" class="formitem" align="center" type="text" placeholder="Enter TeamName" name="TeamName" required>
          <br>
          <input id="TeamStrength"  class="formitem" type="number" placeholder="Enter Strength" name="TeamStrength" required>
          <br>
          <input id="TeamDefence" class="formitem" type="number" placeholder="Enter Defence" name="TeamDefence" required>
          <br>
          <input id="TeamAgility" class="formitem" type="number" placeholder="Enter Agility" name="TeamAgility" required>
          <br>
          <input id="SubmitBtn" class="Button_Style" type="submit" name="submit" value="submit"></input>
        </div>
      </form>
    </div>
      </div>

    </div>
  </div>

</body>
</html>
