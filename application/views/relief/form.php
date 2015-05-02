
     <form action="" method="POST">
    <h3>Basic Information</h3>
    <hr>


    <div class="row">
        <div class="form-group col-lg-4">
            <label for="head_first_name">Family Head First Name</label>
            <input type="text" class="form-control" id="head_first_name" name="head_first_name">
        </div>
        <div class="form-group col-lg-4">
            <label for="head_mid_name">Family Head Middle Name</label>
            <input type="text" class="form-control" id="head_mid_name" name="head_mid_name">
        </div>
        <div class="form-group col-lg-4">
            <label for="head_mid_name">Family Head Last Name</label>
            <input type="text" class="form-control" id="head_last_name" name="head_last_name">
        </div>
    </div>
    <div class="row">
        <div class="form-group col-lg-4">
            <label for="">Gender</label>
            <input type="radio"  name="gender" value="m" id="">Male
            <input type="radio"  name="gender" value="f" id="">Female
            <input type="radio"  name="gender" value="u" id="">Other
        </div>
        <div class="form-group col-lg-2">
            <label for="age">Age</label>
            <input type="text" class="form-control" name="age" id="age">
        </div>
    </div>
    <div class="row">
        <div class="form-group col-lg-4">
            <label for="address">Address 1</label>
            <input type="text" id="address" name="address">
        </div>
        <div class="form-group col-lg-4">
            <label for="tole">Tole</label>
            <input type="text" class="form-control" id="tole" name="tole">
        </div>
        <div class="form-group col-lg-4">
            <label for="tole">Ward No.</label>
            <input type="text" class="form-control" id="ward" name="ward">
        </div>
        <div class="form-group col-lg-4">
            <label for="tole">VDC/Municipality</label>
            <input type="text" class="form-control" id="vdc" name="vdc">
        </div>
    </div>
    <div>
        <label>District</label>
        <select>
            <option>Select..</option>
            <option value="1">Kathmandu</option>
        </select>
    </div>
         <div>
             <label>Country</label>
             <select>
                 <option>Select..</option>
                 <option value="1">Nepal</option>
                 <option value="1">Others</option>
             </select>
         </div>
         <div>
             <label>Mobile Nos:</label>
             <textarea name="mobile_no"></textarea>
         </div>
         <div>
             <label>Phone Nos:</label>
             <textarea name="phone_no"></textarea>
         </div>
         <div>
             <label>emails:</label>
             <textarea name="email"></textarea>
         </div>
         <div>
             <label>Facebook Id:</label>
             <input type="text" name="facebook_id">
         </div>
    <h3>Other Family Members</h3>
    <hr>
    <table>
        <tr>
            <th>Name</th><th>Age</th><th>Gender</th><th>Citizenship No.</th><th>State</th>
        </tr>
        <tr>
            <td><input type="text" name="member_name[]"></td>
            <td><input type="text" name="member_age[]"></td>
            <td><select name="member_gender[]">
                    <option value="m">Male</option>
                    <option value="f">Female</option>
                    <option value="o">Other</option>
                </select>
            </td>
            <td><input type="text" name="member_ctz_no[]"></td>
            <td><select name="member_state[]">
                    <option value="0">Living and Healthy</option>
                    <option value="1">Injured</option>
                    <option value="2">Missing</option>
                    <option value="3">Dead</option>
                </select>
            </td>
        </tr>
    </table>
    <input type="button" value="Add">
    <input type="button" value="Remove">
    <div>
        <label>House Condition:</label>
        <textarea name="house_condition"></textarea>
    </div>
     <div>
         <label>Family Condition:</label>
         <textarea name="house_condition"></textarea>
     </div>
     <div>
         <input type="checkbox"><label>Access to safe drinking water</label>
         <input type="checkbox"><label>Access to safe food</label>
         <input type="checkbox"><label>Access to medical support</label>
         <input type="checkbox"><label>Access to a safe temporary shelter</label>
         <input type="checkbox"><label>Access to a safe permanent shelter</label>
     </div>
     <div>
         <input type="checkbox"><label>Affected by an contagious disease ?</label>
         Condition: <textarea name=""></textarea>
     </div>
         <div>
             <label>Psychological State:</label>
             <select>
                 <option value="0">Frightened to go back</option>
                 <option value="1">Stress</option>
                 <option value="2">Normal</option>
                 <option value="3">Depressed</option>
                 <option value="4">Positive</option>
             </select>
         </div>
         <div>
             <label>Physical State:</label>
             <select>
                 <option value="0">Has no warm clothes</option>
                 <option value="1">Has no blanket</option>
                 <option value="2">Has no mat</option>
                 <option value="3">Has no utensils(plates, cup, spoons, cooking pot)</option>
             </select>
         </div>
         <div>
             <label>Economic State:</label>
             <select>
                 <option value="0">Very poor</option>
                 <option value="1">Poor</option>
                 <option value="2">Non-poor</option>
             </select>
         </div>
         <div>
             <label>Photographs(if any)</label>
             <input type="file" name="pic">
         </div>
    <button type="submit" class="btn btn-default">Submit</button>
</form>