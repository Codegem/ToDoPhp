<form action="submit" >
    <div class="form-group">
        <label for="">Select id logo</label>
        <select name="googlefont" id="id">
            <option selected disabled>Select id logo</option>
            <option value="1">1.<span><i class="fas fa-check-square number-icon"></i></span></option>
            <option value="2">2.<span><i class="far fa-gem number-icon"></i></span></option>
        </select>
    </div>
    <div class="form-group">
        <label>Subject</label>
        <input type="text">
    </div>
    <div class="form-group">
        <label for="priority">Priority</label>
        <select name="priority" id="priority">
            <option selected disabled>Select Priority</option>
            <option value="low">Low</option>
            <option value="normal">Normal</option>
            <option value="high">High</option>
        </select>
    </div>
    <div class="form-group">
        <label for="status">Status</label>
        <select name="status" id="status">
            <option selected disabled>Select Status</option>
            <option value="New">New</option>
            <option value="InProgres">InProgres</option>
            <option value="Complete">Complete</option>
        </select>
    </div>
    <div class="form-group">
        <button class="btn btn-success" type="submit">Submit</button>
    </div>
</form>