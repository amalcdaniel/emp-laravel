@extends("theme")
@section("content")
<div class="container">
<div class="row">
<div class="col col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
<br>
<h2 style="margin-left:520px"> ADD EMPLOYEE</h2>
<br>
<br>
<table class="table" style="border-color:white; width:500px; margin-left:400px">
<tr>
    <td>Name:</td>
    <td><input type="text" class="form-control"></td>
</tr>
<tr>
    <td>Emp Code:</td>
    <td><input type="text" class="form-control"></td>
</tr>
<tr>
    <td>Designation:</td>
    <td><input type="text" class="form-control"></td>
</tr>
<tr>
    <td>Salary:</td>
    <td><input type="tel" class="form-control"></td>
</tr>
<tr>
    <td>DOB:</td>
    <td><input type="date" class="form-control"></td>
</tr>
<tr>
    <td>Place:</td>
    <td><input type="text" class="form-control"></td>
</tr>
<tr>
    <td>Pincode:</td>
    <td><input type="text" class="form-control"></td>
</tr>
<tr>
    <td>Contact Number:</td>
    <td><input type="tel" class="form-control"></td>
</tr>
<tr>
    <td></td>
    <td><button class="btn btn-dark">Submit</button></td>
</tr>


</table>

</div>
</div>
</div>
@endsection