<form action="#"> 
    <div class="sb2-2">
        <div class="sb2-2-2">
            <ul>
                <li><a href="<?php echo base_url() ?>admin/dashboard"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                </li>
                <li class="active-bre"><a href="#"> Ui Form</a>
                </li>
            </ul>
        </div>
        <div class="sb2-2-3">
            <div class="row">
                <div class="col-md-12">
                    <div class="box-inn-sp">
                        <div class="inn-title">
                            <h4>Tour Package</h4>
                            <p>E.g., Holiday Package, Family package, Group package, Friend package</p>
                        </div>
                        <div class="tab-inn">
                            <form>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="package_name" type="text" class="validate">
                                        <label for="Package Name">Package Name</label>
                                    </div>
                                </div>
                                <div class="row">
                                    
                                    <div class="input-field col s12">
                                        <textarea id="Discription" rows="4" cols="50">
                                           
                                        </textarea>

                                        <label for="Package Name">Package Name</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s6">
                                        <input id="Package_name" type="text" class="validate">
                                        <label for="Package_name">Package name</label>
                                    </div>
                                    <div class="input-field col s6">
                                        <input id="no_day" type="text" class="validate">
                                        <label for="no_day">Number of Days</label>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="input-field col s6">
                                        <input id="price_person" type="text" class="validate">
                                        <label for="price_person">Price per person</label>
                                    </div>
                                    <div class="input-field col s6">
                                        <input id="price_Child" type="text" class="validate">
                                        <label for="price_Child">Price per child</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div>
                                        <label for="Discription">Discription</label>
                                    </div>
                                    <div class="input-field col s12">
                                        <textarea id="discription" rows="5" cols="50">
                                           
                                        </textarea>

                                    </div>
                                </div>

                                <div class="box-inn-sp box-second-inn">
                                    <div class="inn-title">
                                        <b>If Date Specific</b>
                                    </div>
                                    <div class="tab-inn">
                                        <form action="#">
                                            <p>
                                                <input name="group1" type="radio" id="test1" />
                                                <label for="test1">Yes</label>
                                            </p>
                                            <p>
                                                <input name="group1" type="radio" id="test2" />
                                                <label for="test2">No</label>
                                            </p>
                                        </form>
                                    </div>
                                </div>
                                <div class="inn-title">
                                    <b>If date specific</b>
                                </div> 


                                <div class="row">
                                    <div class="tab-inn">
                                        <p>
                                            <label for="Select Date">Select Date</label>
                                            <input type="date" id="date-picker" class="datepicker">
                                        </p>
                                    </div>

                                    <div class="input-field col s6">
                                        <input id="pick_location" type="text" class="validate">
                                        <label for="pick_location">pickup location</label>
                                    </div>
                                    <div class="input-field col s6">
                                        <input id="drop_location" type="text" class="validate">
                                        <label for="drop_location">Drop location</label>
                                    </div>
                                </div>
                                <div class="inn-title">
                                    <b>If month specific</b>
                                </div> 
                                <div class="row">

                                    <div class="tab-inn">
                                        <p>
                                            <label for="Select Date">Select Date</label>
                                            <input type="date" id="date-picker" class="datepicker">
                                        </p>
                                    </div>


                                    <div class="input-field col s6">
                                        <input id="pick_location" type="text" class="validate">
                                        <label for="pick_location">pickup location</label>
                                    </div>
                                    <div class="input-field col s6">
                                        <input id="drop_location" type="text" class="validate">
                                        <label for="drop_location">Drop location</label>
                                    </div>
                                    <div class="input-field col s2">
                                        <input type="submit" class="waves-effect waves-light btn-large" value="Submit">
                                    </div>

                                </div>
                        </div>

                        </form>