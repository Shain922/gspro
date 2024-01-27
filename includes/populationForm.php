<div class="row">
    <div class="col-md-6 mb-3">
        <label for="fullName">full name</label>
        <input type="text" class="form-control" id="fullName" placeholder="full name" name="full_name" required />
    </div>
    <div class="col-md-6 mb-3">
        <label for="identity">NIC</label>
        <input type="text" class="form-control" id="identity" placeholder="" name="id_card" required />

    </div>
</div>
<!-- second line -->
<div class="row">
    <div class="col-md-6 mb-3">
        <label for="dob">date of brith</label>
        <input type="date" class="form-control" id="dob" placeholder="" name="dob" required />

    </div>
    <div class="col-md-6 mb-3">
        <label for="hhd">house hold number</label>
        <input type="number" class="form-control" id="hhd" placeholder="" name="house_no" required />

    </div>
</div>

<!-- 3rd -->
<!-- radio btn start -->
<hr class="" />
<div class="row mb-3">
    <div class="col">
        <label class="form-check-label mb-3">gender</label>
        <div class="row">
            <div class="col-md">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" value="male">
                    <label class="form-check-label">
                        male
                    </label>
                </div>
            </div>
            <div class="col-md">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" value="female" checked>
                    <label class="form-check-label">
                        female
                    </label>
                </div>
            </div>
        </div>

    </div>
    <div class="col">

        <label class="form-check-label mb-3">marital status</label>
        <div class="row">
            <div class="col-md">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="marital" value="maried">
                    <label class="form-check-label">
                        married
                    </label>
                </div>
            </div>
            <div class="col-md">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="marital" value="devorst" checked>
                    <label class="form-check-label">
                        divorce
                    </label>
                </div>
            </div>
        </div>

    </div>
</div>
<hr class="" />
<!-- nation and religion start -->
<div class="row">
    <div class="col-md">
        <div class="form-group">
            <label>nation</label>
            <select class="custom-select d-block w-100" id="" name="nation" required>
                <option value="">select</option>
                <option value="sinhala">sinhala</option>
                <option value="tamil">tamil</option>
                <option value="muslim">muslim</option>
                <option value="burgher">burgher</option>
            </select>
        </div>
    </div>
    <div class="col-md">
        <div class="form-group">
            <label>religion</label>
            <select class="custom-select d-block w-100" id="" name="religion" required>
                <option>select</option>
                <option value="budhisim">budhisim</option>
                <option value="hindu">hindu</option>
                <option value="islam">islam</option>
                <option value="catholisim">catholisim</option>
                <option value="other">other</option>
            </select>
        </div>
    </div>
</div>
<!-- nation and religion end -->
<!-- radio end -->
<div class="row">
    <div class="col-md-6 mb-3">
        <label for="address">address</label>
        <input type="text" class="form-control" id="address" placeholder="address" name="address" required />

    </div>
    <div class="col-md-6 mb-3">
        <label for="placeOfWork">place of work</label>
        <input type="text" class="form-control" id="placeOfWork" placeholder="" name="place_work" required />
    </div>
</div>
<!-- 4th -->
<div class="row">
    <div class="col-md-6 mb-3">
        <label for="monthlyincome">monthly income</label>
        <input type="text" class="form-control" id="monthlyincome" placeholder="" name="income" required />

    </div>
    <div class="col-md-6 mb-3">
        <label for="edu-level">education level</label>
        <select class="custom-select d-block w-100" id="edu-level" name="edu_level" required>
            <option value="">select</option>
            <option value="odinary">odinary level</option>
            <option value="advance"> advance level</option>
            <option value="higher"> highers study</option>
        </select>
        <!-- add another field -->
    </div>
</div>
<!-- family members details -->
<h4 class="text-muted">
    family members details
</h4>
<div id="tbl">
    <div class="row" id="">
        <div class="col-md-3">
            <div class="form-group">
                <label for="">name</label>
                <input type="text" class="form-control" name="" id="">
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label for="">relationship</label>

                <input type="text" class="form-control" name="" id="">
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label for="">occupation</label>
                <input type="text" class="form-control" name="" id="">
            </div>
        </div>
        <div class="col-md-3">
            <button class="btn btn-primary btn-block add" id="add">
                Add more members
            </button>

        </div>
    </div>

</div>