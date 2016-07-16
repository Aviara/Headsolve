<!-- start: MAIN CONTAINER -->
<div class="main-container inner">
    <!-- start: PAGE -->
    <div class="main-content">
        <!-- start: PANEL CONFIGURATION MODAL FORM -->
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ol class="breadcrumb">
                        <li>
                            <a href="#">
                                Dashboard
                            </a>
                        </li>
                        <li class="active">
                            Form Elements
                        </li>
                    </ol>
                </div>
            </div>
            <div class="panel panel-white">
                <div class="panel-body">
                    <form role="form" class="form-horizontal" ng-submit="saveMenuData(menu)" name="menu-save" novalidate>
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="menu-name">Menu Name</label>
                            <div class="col-sm-9"><input type="text" placeholder="Menu Name" id="menu-name" class="form-control" name="name" ng-model="menu.name"></div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="description">Description</label>
                            <div class="col-sm-9"><input type="text" placeholder="Description" id="description" class="form-control" ng-model="menu.description" name="description"></div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="title">Title</label>
                            <div class="col-sm-9"><input type="text" placeholder="Title" id="title" class="form-control" ng-model="menu.title" name="title"></div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="url">URL</label>
                            <div class="col-sm-9"><input type="text" placeholder="Enter Menu URL" id="url" class="form-control" ng-model="menu.url" name="url"></div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="url">Is Published</label>
                            <div class="col-sm-9">
                                <label class="radio-inline">
                                    <input type="radio" class="square-red" value="" checked="checked" ng-model="menu.is_published" name="is_published">Yes
                                </label>

                                <label class="radio-inline">
                                    <input type="radio" class="square-red" value="" checked="checked" ng-model="menu.is_published" name="is_published">No
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="url">Order Number</label>
                            <div class="col-sm-9">
                                <select id="form-field-select-1" class="form-control" ng-model="menu.order_number" name="order_number">
                                    <option value="">&nbsp;</option>
                                    <option ng-repeat="i in getOrderNumbers() track by $index" value="{{$index+1}}">{{$index+1}}</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="url">Image URL</label>
                            <div class="col-sm-9"><input type="text" placeholder="Enter menu icon URL" id="image-url" class="form-control" ng-model="menu.image_url" name="image_url"></div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="url">Parent Menu ID</label>
                            <div class="col-sm-9">
                                <select id="form-field-select-1" class="form-control" ng-model="menu.parent_menu_id" name="parent_menu_id">
                                    <option value="">&nbsp;</option>
                                    <option ng-repeat="i in getMenuList1() track by $index" value="{{$index+1}}">{{$index+1}}</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="form-group center">
                            <input type="submit" value="submit" name="submit" class="btn btn-success" ng-disabled="menu-save.$invalid" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>