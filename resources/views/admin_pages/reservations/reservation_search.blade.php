
<div class="row">
  <div class="col-6">
    <h3 class="mb-0">Reservation List</h3>
  </div>
  <div class="col-6 text-right">
    <a href="#!" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#reservationNew">New Reservation</a>
  </div>
</div>

<form style="width: 100%" id="reservationDashboard" action="${pageContext.request.contextPath}" method="post">
<div class="row" style="margin-top: 10px; margin-bottom: 10px;">
  <div class="col-3">
    <div class="input-daterange datepicker">
      <div class="form-group">
      <div class="input-group input-group-alternative">
          <div class="input-group-prepend">
            <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
          </div>
          <input class="form-control" placeholder="Start date" type="text" >
        </div>
      </div>
      <div class="form-group">
      <div class="input-group input-group-alternative">
          <div class="input-group-prepend">
            <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
          </div>
          <input class="form-control" placeholder="End date" type="text" >
        </div>
      </div>
    </div>
  </div>
  <div class="col-3">
    <div class="form-group mb-0">
      <div class="input-group input-group-alternative mb-12 lg-12">
        <div class="input-group-prepend">
          <span class="input-group-text"><i class="fas fa-search"></i></span>
        </div>
        <input class="form-control" placeholder="Search" type="text">
      </div>
    </div> 
    <div class="dropdown">
        <select name="status" id="status" class="btn btn-outline-primary dropdown-toggle text-left btn-icon " style="background-color: white;margin-top:25px;height: 45px" onchange="getStaffData(this.value);">
          <option value="" >Status</option>
          <option value="inactive" >Upcoming</option>
          <option value="inactive" >Done</option>
          <option value="active" >Canceled</option>
        </select>
      </div>
  </div>
  <div class="col-6">
  <div class="row">
  <div class="col-12">
    <div class="form-group">
      <div class="dropdown">
        <select name="salon" id="salon" class="btn btn-outline-primary dropdown-toggle text-left btn-icon" style="background-color: white;height: 45px;" onchange="getReservationData(this.value);">
          <option value="" >Salon</option>
          <c:forEach items="${salonList}" var="s">
            <option value="${s.salonId}" ${s.salonId == salonId ? 'selected="selected"' : ''} class="dropdown-item">${s.salonName}</option>
          </c:forEach>
        </select>
      </div>
      </div>
      </div>
      <div class="row">
  <div class="col-12">
      <div class="dropdown">
        <select name="staff" id="staff" class="btn btn-outline-primary dropdown-toggle text-left btn-icon" style="background-color: white;height: 45px" onchange="getReservationData(this.value);">
          <option value="" >All Staff</option>
          <c:forEach items="${staffList}" var="s">
          </c:forEach>
        </select>
      </div>
      <div class="dropdown">
        <select name="menu"" id="menu" class="btn btn-outline-primary dropdown-toggle text-left btn-icon" style="background-color: white;height: 45px" onchange="getReservationData(this.value);">
          <option value="" >All Menu</option>
          <c:forEach items="${menuList}" var="s">
          </c:forEach>
        </select>
      </div>
      </div>
      </div>
    </div>
  </div>
  </form>
</div>
