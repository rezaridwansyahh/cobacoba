<html>
  <head>
    <title>Test Coba Coba</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="bootstrap/css/bootstrap-material-design.min.css" rel="stylesheet" />
    <link href="bootstrap/css/ripples.min.css" rel="stylesheet" />
    <script
  src="https://code.jquery.com/jquery-2.2.4.min.js"
  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  crossorigin="anonymous"></script>
    {{-- <script src="bootstrap/js/jquery-3.1.1.min.js"></script> --}}
    <script src="bootstrap/js/bootstrap0.min.js"></script>
    <script src="bootstrap/js/ripples.min.js"></script>
    <script src="bootstrap/js/material.min.js"></script>
    <script src="bootstrap/js/snackbar.min.js"></script>

  </head>
  <body>
    <div class="bs-component">
      <div class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="javascript:void(0)">Brand</a>
          </div>
          <div class="navbar-collapse collapse navbar-responsive-collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="javascript:void(0)">Active</a></li>
              <li><a href="javascript:void(0)">Link</a></li>
              <li class="dropdown">
                <a href="bootstrap-elements.html" data-target="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown
                  <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="javascript:void(0)">Action</a></li>
                  <li><a href="javascript:void(0)">Another action</a></li>
                  <li><a href="javascript:void(0)">Something else here</a></li>
                  <li class="divider"></li>
                  <li class="dropdown-header">Dropdown header</li>
                  <li><a href="javascript:void(0)">Separated link</a></li>
                  <li><a href="javascript:void(0)">One more separated link</a></li>
                </ul>
              </li>
            </ul>
            <form class="navbar-form navbar-left">
              <div class="form-group">
                <input type="text" class="form-control col-md-8" placeholder="Search">
              </div>
            </form>
            <ul class="nav navbar-nav navbar-right">
              <li><a href="javascript:void(0)">Link</a></li>
              <li class="dropdown">
                <a href="bootstrap-elements.html" data-target="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown
                  <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="javascript:void(0)">Action</a></li>
                  <li><a href="javascript:void(0)">Another action</a></li>
                  <li><a href="javascript:void(0)">Something else here</a></li>
                  <li class="divider"></li>
                  <li><a href="javascript:void(0)">Separated link</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid">
      <div class="col-md-3">
        <div class="panel panel-primary">
          <div class="panel-heading">
            <h3 class="panel-title">Panel success</h3>
          </div>
          <div class="panel-body">
            Panel content
          </div>
        </div>
      </div>
      <div class="col-md-9">
        <div class="jumbotron">
          <form class="form-horizontal">
            <fieldset>
              <legend>Legend</legend>
              <div class="form-group">
                <label for="inputEmail" class="col-md-2 control-label">Email</label>
                <div class="col-md-10">
                  <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                </div>
              </div>
              <div class="form-group">
                <label for="inputPassword" class="col-md-2 control-label">Password</label>

                <div class="col-md-10">
                  <input type="password" class="form-control" id="inputPassword" placeholder="Password">
                </div>
              </div>
              <div class="form-group" style="margin-top: 0;"> <!-- inline style is just to demo custom css to put checkbox below input above -->
                <div class="col-md-offset-2 col-md-10">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox"> Checkbox
                    </label>
                    <label>
                      <input type="checkbox" disabled=""> Disabled Checkbox
                    </label>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="col-md-offset-2 col-md-10">
                  <div class="togglebutton">
                    <label>
                      <input type="checkbox" checked=""> Toggle button
                    </label>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="inputFile" class="col-md-2 control-label">File</label>

                <div class="col-md-10">
                  <input type="text" readonly="" class="form-control" placeholder="Browse...">
                  <input type="file" id="inputFile" multiple="">
                </div>
              </div>
              <div class="form-group">
                <label for="textArea" class="col-md-2 control-label">Textarea</label>

                <div class="col-md-10">
                  <textarea class="form-control" rows="3" id="textArea"></textarea>
                  <span class="help-block">A longer block of help text that breaks onto a new line and may extend beyond one line.</span>
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-2 control-label">Radios</label>

                <div class="col-md-10">
                  <div class="radio radio-primary">
                    <label>
                      <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
                      Option one is this
                    </label>
                  </div>
                  <div class="radio radio-primary">
                    <label>
                      <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                      Option two can be something else
                    </label>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="select111" class="col-md-2 control-label">Select</label>

                <div class="col-md-10">
                  <select id="select111" class="form-control">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label for="select222" class="col-md-2 control-label">Select Multiple</label>

                <div class="col-md-10">
                  <select id="select222" multiple="" class="form-control">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <div class="col-md-10 col-md-offset-2">
                  <button type="button" class="btn btn-default">Cancel</button>
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </div>
            </fieldset>
          </form>
        </div>
      </div>
    </div>
  </body>
  <script>
  $(function () {
    $.material.init();
  });
</script>
</html>
