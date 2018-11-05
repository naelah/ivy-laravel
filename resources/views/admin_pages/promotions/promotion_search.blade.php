<div class="row">
  <div class="col-6">
    <h3 class="mb-0">Promotion List</h3>
  </div>

  <div class="col-6 text-right">
    <a href="#!" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#promoNew">New Promotion</a>
  </div>
</div>
<div class="row" style="margin-top: 10px; margin-bottom: 10px;">
<div class="col-3">
      <div class="form-group mb-0">
        <div class="input-group input-group-alternative mb-12 lg-12">
          <div class="input-group-prepend">
            <span class="input-group-text"><i class="fas fa-search"></i></span>
          </div>
          <input class="form-control" placeholder="Search" type="text">
        </div>
      </div>
      
</div>
<div class="col-9">
  <div class="form-group">
  <div class="dropdown">
        <select name="salon" id="salon"
			class="btn btn-outline-primary dropdown-toggle text-left btn-icon" style="background-color: white;" onchange="getStaffData(this.value);">
			<option value="" >Salon</option>
			<c:forEach items="${salonList}" var="s">
				<option value="${s.salonId}" ${s.salonId == salonId ? 'selected="selected"' : ''} class="dropdown-item">${s.salonName}</option>
			</c:forEach>
		</select>
    </div>
    <div class="dropdown">
     <select name="period" id="period"
			class="btn btn-outline-primary dropdown-toggle text-left btn-icon" style="background-color: white;" onchange="getStaffData(this.value);">
			<option value="" >Duration</option>
			<option value="mon" >1 hour</option>
			<option value="tue" >2 hour</option>
			<option value="wed" >3 hour</option>
			</select>
    </div>
    <div class="dropdown">
     <select name="shiftstart" id="shiftstart"
			class="btn btn-outline-primary dropdown-toggle text-left btn-icon" style="background-color: white;" onchange="getStaffData(this.value);">
			<option value="" >Status</option>
			<option value="active" >Active</option>
			<option value="inactive" >Inactive</option>
			</select>
    </div>
  </div>
</div>

