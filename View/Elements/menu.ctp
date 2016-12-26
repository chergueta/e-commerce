<style type="text/css">
.dropdown-submenu {
    position: relative;
}

.dropdown-submenu>.dropdown-menu {
    top: 0;
    left: 100%;
    margin-top: -6px;
    margin-left: -1px;
    -webkit-border-radius: 0 6px 6px 6px;
    -moz-border-radius: 0 6px 6px;
    border-radius: 0 6px 6px 6px;
}

.dropdown-submenu:hover>.dropdown-menu {
    display: block;
}

.dropdown-submenu>a:after {
    display: block;
    content: " ";
    float: right;
    width: 0;
    height: 0;
    border-color: transparent;
    border-style: solid;
    border-width: 5px 0 5px 5px;
    border-left-color: #ccc;
    margin-top: 5px;
    margin-right: -10px;
}

.dropdown-submenu:hover>a:after {
    border-left-color: #fff;
}

.dropdown-submenu.pull-left {
    float: none;
}

.dropdown-submenu.pull-left>.dropdown-menu {
    left: -100%;
    margin-left: 10px;
    -webkit-border-radius: 6px 0 6px 6px;
    -moz-border-radius: 6px 0 6px 6px;
    border-radius: 6px 0 6px 6px;
}
.submenu{
      background-color: black;
}
</style>

  <?php $user = $this->UserAuth->getUser(); ?>
<!--MENU OPEN-->
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Website<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li class="dropdown-submenu">
                  <a tabindex="-1" href="#">Works</a>
                  <ul class="dropdown-menu submenu">
                    <li><a href="<?php echo $this->webroot.'works/add'; ?>">New</a></li>
                    <li><a href="<?php echo $this->webroot.'works'; ?>/type/design">Design</a></li>
                    <li><a href="<?php echo $this->webroot.'works'; ?>/type/development">Development</a></li>
                    <li><a href="<?php echo $this->webroot.'works'; ?>">All</a></li>
                  </ul>
                </li>
                <li class="dropdown-submenu">
                  <a tabindex="-1" href="#">Quotes</a>
                  <ul class="dropdown-menu submenu">
                    <li><a href="<?php echo $this->webroot.'quotes/add'; ?>">New</a></li>
                    <li><a href="<?php echo $this->webroot.'quotes'; ?>">All</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <?php if($this->UserAuth->getUserId() == 1){ ?>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Administration<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li class="dropdown-submenu">
                  <a tabindex="-1" href="#">Jobs</a>
                  <ul class="dropdown-menu submenu">
                    <li><a href="<?php echo $this->webroot.'cargos/add'; ?>">New</a></li>
                    <li><a href="<?php echo $this->webroot.'cargos'; ?>">All</a></li>
                  </ul>
                </li>
                <li class="dropdown-submenu">
                  <a tabindex="-1" href="#">Staff</a>
                  <ul class="dropdown-menu submenu">
                    <li><a href="<?php echo $this->webroot.'personals/add'; ?>">New</a></li>
                    <li><a href="<?php echo $this->webroot.'personals'; ?>">All</a></li>
                  </ul>
                </li>
                <li class="dropdown-submenu">
                  <a tabindex="-1" href="#">Clients</a>
                  <ul class="dropdown-menu submenu">
                    <li><a href="<?php echo $this->webroot.'clients/add'; ?>">New</a></li>
                    <li><a href="<?php echo $this->webroot.'clients'; ?>">All</a></li>
                  </ul>
                </li>
                <li class="dropdown-submenu">
                  <a tabindex="-1" href="#">Projects</a>
                  <ul class="dropdown-menu submenu">
                    <li><a href="<?php echo $this->webroot.'projects/add'; ?>">New</a></li>
                    <li><a href="<?php echo $this->webroot.'projects'; ?>">All</a></li>
                  </ul>
                </li>
                <li class="dropdown-submenu">
                  <a tabindex="-1" href="#">Incomes</a>
                  <ul class="dropdown-menu submenu">
                    <li><a href="<?php echo $this->webroot.'ingresos/add'; ?>">New</a></li>
                    <li><a href="<?php echo $this->webroot.'ingresos'; ?>">All</a></li>
                  </ul>
                </li>
                <li class="dropdown-submenu">
                  <a tabindex="-1" href="#">Expenses</a>
                  <ul class="dropdown-menu submenu">
                    <li><a href="<?php echo $this->webroot.'egresos/add'; ?>">New</a></li>
                    <li><a href="<?php echo $this->webroot.'egresos'; ?>">All</a></li>
                  </ul>
                </li>
                <li class="dropdown">
                  <a tabindex="-1" href="<?php echo $this->webroot.'start/balance'; ?>">Balance</a>
                </li>
              </ul>
            </li>
            <?php } ?>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Options <span class="caret"></span></a>
              <?php if($this->UserAuth->getUserId()): ?>
                <ul class="dropdown-menu">
                  <li><a href="<?php echo $this->webroot; ?>" target="_blank">Go to page</a></li>
                  <li><a href="<?php echo $this->webroot; ?>changePassword">Change password</a></li>
                  <li><a href="<?php echo $this->webroot.'logout'; ?>">Log out</a></li>
                </ul>
              <?php else: ?>
                <ul class="dropdown-menu">
                  <li><a href="<?php echo $this->webroot.'login'; ?>">Identificarse</a></li>
                </ul>
              <?php endIf ;?>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
    <!--MENU CLOSE-->