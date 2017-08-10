<?php
$this->title = '添加';
$this->context->layout = 'blog';
?>

<div class="container-fluid" id="pcont">
    <div class="page-head">
        <h2>Form Validation</h2>
        <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li><a href="#">Form</a></li>
            <li class="active">Validation</li>
        </ol>
    </div>
    <div class="cl-mcont">
        <div class="row">
            <div class="col-sm-6 col-md-6">
                <div class="block-flat">
                    <div class="header">
                        <h3>Basic Form</h3>
                    </div>
                    <div class="content">

                        <form action="#" data-parsley-validate novalidate>
                            <div class="form-group">
                                <label>User Name</label> <input type="text" name="nick" parsley-trigger="change" required placeholder="Enter user name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Email address</label> <input type="email" name="email" parsley-trigger="change" required placeholder="Enter email" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Password</label> <input id="pass1" type="password" placeholder="Password" required class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Repeat Password</label> <input data-parsley-equalto="#pass1" type="password" required placeholder="Password" class="form-control">
                            </div>
                            <div class="checkbox">
                                <label> <input type="checkbox" name="remember"> Remember me </label> </div>
                            <button class="btn btn-primary" type="submit">Submit</button>
                            <button class="btn btn-default">Cancel</button>
                        </form>

                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-6">
                <div class="block-flat">
                    <div class="header">
                        <h3>Horizontal Form</h3>
                    </div>
                    <div class="content">
                        <form class="form-horizontal" role="form"  data-parsley-validate novalidate>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-3 control-label">Email</label>
                                <div class="col-sm-7">
                                    <input type="email" required parsley-type="email" class="form-control" id="inputEmail3" placeholder="Email">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-3 control-label">Password</label>
                                <div class="col-sm-7">
                                    <input type="password" required class="form-control" id="inputPassword3" placeholder="Password">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-3 control-label">Web Site</label>
                                <div class="col-sm-7">
                                    <input type="url" required parsley-type="url" class="form-control" placeholder="URL">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-3 col-sm-7">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="remember_the_fallen"> Remember me
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" class="btn btn-primary">Registrer</button>
                                    <button class="btn btn-default">Cancel</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">

                <div class="block-flat">
                    <div class="header">
                        <h3>Validation Types</h3>
                    </div>
                    <div class="content">
                        <form class="form-horizontal group-border-dashed" action="#">
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Required</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" required placeholder="Type something" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Min Length</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" required data-parsley-minlength="6" placeholder="Min 6 chars." />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Max Length</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" required data-parsley-maxlength="6" placeholder="Max 6 chars." />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Range Length</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" required data-parsley-length="[5,10]" placeholder="Text between 5 - 10 chars length" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Min Value</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" required data-parsley-min="6" placeholder="Min value is 6" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Max Value</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" required data-parsley-max="6" placeholder="Max value is 6" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Range Value</label>
                                <div class="col-sm-6">
                                    <input class="form-control" required type="text"
                                           type="range" min="6" max="100" placeholder="Number between 6 - 100" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Regular Exp</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" required data-parsley-pattern="#[A-Fa-f0-9]{6}" placeholder="Hex. Color" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Equal To</label>
                                <div class="col-sm-3">
                                    <input type="password" id="pass2" class="form-control" required placeholder="Password" />
                                </div>
                                <div class="col-sm-3">
                                    <input type="password" class="form-control" required data-parsley-equalto="#pass2" placeholder="Re-Type Password" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Min check</label>
                                <div class="col-sm-6">
                                    <div class="radio">
                                        <label for="ck1"> <input id="ck1" name="ck1" type="checkbox" data-parsley-multiple="groups"  value="bar" data-parsley-mincheck="2"> Option 1</label>
                                    </div>
                                    <div class="radio">
                                        <label for="ck2"> <input id="ck2" name="ck2" type="checkbox" data-parsley-multiple="groups" value="bar2" data-parsley-mincheck="2"> Option 2</label>
                                    </div>
                                    <div class="radio">
                                        <label for="ck3"> <input id="ck3" name="ck3" type="checkbox" data-parsley-multiple="groups"  value="bar3" data-parsley-mincheck="2" required > Option 3</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Max check</label>
                                <div class="col-sm-6">
                                    <div class="radio">
                                        <label> <input type="checkbox" value="bar" name="e1" data-parsley-multiple="group1"> Option 1</label>
                                    </div>
                                    <div class="radio">
                                        <label> <input type="checkbox" value="bar" name="e2" data-parsley-multiple="group1"> Option 2</label>
                                    </div>
                                    <div class="radio">
                                        <label> <input type="checkbox" value="bar" name="e3" data-parsley-multiple="group1" data-parsley-maxcheck="1"> Option 3</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">E-Mail</label>
                                <div class="col-sm-6">
                                    <input type="email" class="form-control" required parsley-type="email" placeholder="Enter a valid e-mail" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">URL</label>
                                <div class="col-sm-6">
                                    <input parsley-type="url" type="url" class="form-control" required placeholder="URL" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Digits</label>
                                <div class="col-sm-6">
                                    <input data-parsley-type="digits" type="text" class="form-control" required placeholder="Enter only digits" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Number</label>
                                <div class="col-sm-6">
                                    <input data-parsley-type="number" type="text" class="form-control" required placeholder="Enter only numbers" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Alphanumeric</label>
                                <div class="col-sm-6">
                                    <input data-parsley-type="alphanum" type="text" class="form-control" required placeholder="Enter alphanumeric value" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Textarea</label>
                                <div class="col-sm-6">
                                    <textarea required class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <button class="btn btn-default">Cancel</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>

    </div>
</div>