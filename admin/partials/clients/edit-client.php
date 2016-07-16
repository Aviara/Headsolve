<!-- start: MAIN CONTAINER -->
<div class="main-container inner">
    <!-- start: PAGE -->
    <div class="main-content">
        <!-- start: PANEL CONFIGURATION MODAL FORM -->
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <ol class="breadcrumb">
                        <li>
                            <a href="#">
                                Clients
                            </a>
                        </li>
                        <li class="active">
                            Add Client
                        </li>
                    </ol>
                </div>
                <div class="col-md-10">
                    <a href="#/view-clients"><button type="button" class="btn btn-success breadcrumb-button" name="view-listing">View Clients</button></a>
                </div>
            </div>
            <div class="panel panel-white">
                <div class="panel-body">
                    <!--
                        Form validation by angular JS best example
                        https://scotch.io/tutorials/angularjs-form-validation
                    -->
                    <div ng-if="update = false">
                        <div class="form-group center">
                            <span>Branch update functionality.</span>
                        </div>
                    </div>

                    <form role="form" class="form-horizontal" ng-submit="saveClientData(client)" name="clientSave" novalidate>
                        <div class="form-group" ng-class="{ 'has-error': clientSave.first_name.$touched && clientSave.first_name.$invalid }">
                            <label class="col-sm-2 control-label" for="first_name">First Name</label>
                            <div class="col-sm-9">
                                <input type="hidden" value="{{clientDetails.id}}" name="id" />
                                <input type="text" placeholder="First Name" id="first_name" class="form-control" name="first_name" ng-model="client.first_name" required>
                            </div>
                        </div>
                        <div class="form-group" ng-class="{ 'has-error': clientSave.middle_name.$touched && clientSave.middle_name.$invalid }">
                            <label class="col-sm-2 control-label" for="middlename">Middle Name</label>
                            <div class="col-sm-9">
                                <input type="text" placeholder="Middle Name" id="middlename" class="form-control" name="middle_name" ng-model="client.middle_name" required>
                            </div>
                        </div>
                        <div class="form-group" ng-class="{ 'has-error': clientSave.last_name.$touched && clientSave.last_name.$invalid }">
                            <label class="col-sm-2 control-label" for="lastname">Last Name</label>
                            <div class="col-sm-9">
                                <input type="text" placeholder="Last Name" id="lastname" class="form-control" name="last_name" ng-model="client.last_name" required>
                            </div>
                        </div>
                         <div class="form-group" ng-class="{ 'has-error': clientSave.mobile_no.$touched && clientSave.mobile_no.$invalid }">
                            <label class="col-sm-2 control-label" for="mobile_no">Mobile No</label>
                            <div class="col-sm-9">
                                <input type="text" placeholder="Mobile No" id="mobile_no" class="form-control" name="mobile_no" ng-model="client.mobile_no" ng-value="{{clientDetails.mobile_no}}" ng-bind="{{clientDetails.mobile_no}}" required>
                            </div>
                        </div>
                         <div class="form-group" ng-class="{ 'has-error': clientSave.email_id.$touched && clientSave.email_id.$invalid }">
                            <label class="col-sm-2 control-label" for="email_id">Email Id</label>
                            <div class="col-sm-9">
                                <input type="text" placeholder="Email Id" id="email_id" class="form-control" name="email_id" ng-model="client.email_id" ng-value="{{clientDetails.email_id}}" ng-bind="{{clientDetails.email_id}}" required>
                            </div>
                        </div>
                          <div class="form-group" ng-class="{ 'has-error': clientSave.home_no.$touched && clientSave.home_no.$invalid }">
                            <label class="col-sm-2 control-label" for="home_no">Home No</label>
                            <div class="col-sm-9">
                                <input type="text" placeholder="Home No" id="home_no" class="form-control" name="home_no" ng-model="client.home_no" ng-value="{{clientDetails.home_no}}" ng-bind="{{clientDetails.home_no}}" required>
                            </div>
                        </div>
                        <div class="form-group" ng-class="{ 'has-error': clientSave.address_line1.$touched && clientSave.address_line1.$invalid }">
                            <label class="col-sm-2 control-label" for="address_line1">Address Line 1</label>
                            <div class="col-sm-9">
                                <textarea name="address_line1" id="address_line1" ng-model="client.address_line1" rows="5" cols="50" placeholder="Enter Address details."></textarea>
                            </div>
                        </div>

                        <div class="form-group" ng-class="{ 'has-error': clientSave.address_line2.$touched && clientSave.address_line2.$invalid }">
                            <label class="col-sm-2 control-label" for="address_line2">Address Line 2</label>
                            <div class="col-sm-9">
                                <textarea name="address_line2" id="address_line2" ng-model="client.address_line2" rows="5" cols="50" placeholder="Enter Address details."></textarea>
                            </div>
                        </div>
                        <div class="form-group" ng-class="{ 'has-error': clientSave.location.$touched && clientSave.location.$invalid }">
                            <label class="col-sm-2 control-label" for="location">Location</label>
                            <div class="col-sm-9">
                                <input type="text" placeholder="Location" id="location" class="form-control" name="location" ng-model="client.location" ng-value="{{clientDetails.location}}" ng-bind="{{clientDetails.location}}" required>
                            </div>
                        </div>
                        <div class="form-group" ng-class="{ 'has-error': clientSave.area.$touched && clientSave.area.$invalid }">
                            <label class="col-sm-2 control-label" for="Area">Area</label>
                            <div class="col-sm-9">
                                <input type="text" placeholder="Area" id="area" class="form-control" name="area" ng-model="client.area" ng-value="{{clientDetails.area}}" ng-bind="{{clientDetails.area}}" required>
                            </div>
                        </div>
                        <div class="form-group" ng-class="{ 'has-error': clientSave.pin_code.$touched && clientSave.pin_code.$invalid }">
                            <label class="col-sm-2 control-label" for="pin_code">Pin Code</label>
                            <div class="col-sm-9">
                                <input type="text" placeholder="Pin Code" id="area" class="form-control" name="pin_code" ng-model="client.pin_code" ng-value="{{clientDetails.pin_code}}" ng-bind="{{clientDetails.pin_code}}" required>
                            </div>
                        </div>
                        <div class="form-group" ng-class="{ 'has-error': clientSave.customer_type_id.$touched && clientSave.customer_type_id.$invalid }">
                            <label class="col-sm-2 control-label" for="customer_type_id">Customer Type Id</label>
                            <div class="col-sm-9">
                                <input type="text" placeholder="Customer Type Id" id="customer_type_id" class="form-control" name="customer_type_id" ng-model="client.customer_type_id" ng-value="{{clientDetails.customer_type_id}}" ng-bind="{{clientDetails.customer_type_id}}" required>
                            </div>
                        </div>
                       
                        <div ng-if="update = true">
                            <div class="form-group center">
                                <button type="submit" value="submit" name="submit" class="btn btn-success" ng-disabled="clientSave.$invalid">Submit</button>
                                <a href="#/view-clients"><button type="button" value="button" name="view-branch" class="btn btn-success">View Clients</button></a>
                            </div>
                        </div>

                        <div ng-if="update = false">
                            <div class="form-group center">
                                <button type="submit" value="update" name="submit" ng-class="{ 'btn-success' : clientSave.$valid }" class="btn btn-success" ng-disabled="clientSave.$invalid">Update</button>
                                <a href="#/view-clients"><button type="button" value="button" name="view-branch" class="btn btn-success">View Clients</button></a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>