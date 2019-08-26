<div class="form-popup" id="myForm">
    <form name="addEmployeesSalaries" id="addEmployeesSalaries" class="form-container">
        @csrf
        <div class="form-group">

            <input type="text" class="form-control pull-right" id="date" name="date" placeholder="Date">
        </div>
        <div class="form-group">

            <select class="form-control" id="name" name="emp_id" style="border: none; box-shadow: none; border-bottom: 2px solid #1a1a1a5e !important; margin-bottom: 22px;">
                <option>Please Select</option>
                @foreach($salariesName as $salary)
                    <option id="salary_id"  value="{{ $salary->id }}">{{ $salary->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">

            <input type="text" id="salary" class="salary" placeholder="Salary" name="salary" >
        </div>
        <div class="form-group">

            <input type="text" id="fine" name="fine" placeholder="Fine" >
        </div>
        <div class="form-group">

            <input type="text" id="total_sal"  name="total_sal" placeholder="Total Salary" >
        </div>
        <div class="form-group">

            <input type="text" id="receive" name="receive" placeholder="Received">
        </div>
        <div class="form-group">

            <input type="text" id="pending" name="pending" value="" placeholder="Pending" name="pending">
        </div>
        <div class="form-group">

            <label for="Comments">Comments</label><br>
            <textarea name="comments" id="comments" rows="3" style="margin: 0px; width: 280px; height: 110px;"></textarea>

        </div>
        <button type="button" class="btn cancel" style="position: relative; top: 20px; left: 30px;" onclick="closeForm()">Close</button>
        &emsp;&emsp;
        <button type="submit" class="btn btn-success" style="position: relative; background-color: #c879af !important; top: 20px; left: 20px;">Add</button>

    </form>
</div>