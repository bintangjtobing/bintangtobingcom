@extends('layouts.layout')
@section('content')
<div class="col-md-12 top-20 padding-0">
    <div class="col-md-12">
        <div class="panel form-element-padding">
            <div class="panel-heading">
                <h4>Tambah Level Authority</h4>
            </div>
            <div class="panel-body" style="padding-bottom:30px;">
                <div class="col-md-6">
                    <div class="form-group form-animate-text" style="margin-top:40px !important;">
                            <input type="text" class="form-text" required>
                            <span class="bar"></span>
                            <label for="type">Type</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group form-animate-text" style="margin-top:40px !important;">
                          <input type="text" class="form-text" required>
                          <span class="bar"></span>
                          <label for="judultype">Judul Type</label>
                    </div>
                </div>
                <div class="col-md-12 top-20 padding-0">
                <div class="col-md-12">
                  <div class="panel">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-6 text-left"><h3>Authoritation Key</h3></div>
                            <div class="col-md-6 col-sm-6 col-xs-6 text-right">
                                <h3><a href="/add-authority"><span title="Add User" class="icon-plus icons icon text-right"></span></a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                      <div class="responsive-table">
                      <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                      <thead>
                        <tr>
                          <th>Component</th>
                          <th class="text-center">Create</th>
                          <th class="text-center">Read</th>
                          <th class="text-center">Update</th>
                          <th class="text-center">Delete</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>User Management</td>
                          <td class="text-center"><input type="checkbox" name="create.UserManagement"></td>
                          <td class="text-center"><input type="checkbox" name="read.UserManagement"></td>
                          <td class="text-center"><input type="checkbox" name="update.UserManagement"></td>
                          <td class="text-center"><input type="checkbox" name="delete.UserManagement"></td>
                        </tr>
                        <tr>
                          <td>Authority</td>
                          <td class="text-center"><input type="checkbox" name="create.Oauth"></td>
                          <td class="text-center"><input type="checkbox" name="read.Oauth"></td>
                          <td class="text-center"><input type="checkbox" name="update.Oauth"></td>
                          <td class="text-center"><input type="checkbox" name="delete.Oauth"></td>
                        </tr>
                        <tr>
                          <td>Associate</td>
                          <td class="text-center"><input type="checkbox" name="create.Associate"></td>
                          <td class="text-center"><input type="checkbox" name="read.Associate"></td>
                          <td class="text-center"><input type="checkbox" name="update.Associate"></td>
                          <td class="text-center"><input type="checkbox" name="delete.Associate"></td>
                        </tr>
                        <tr>
                          <td>Sales Orders</td>
                          <td class="text-center"><input type="checkbox" name="create.SalesOrders"></td>
                          <td class="text-center"><input type="checkbox" name="read.SalesOrders"></td>
                          <td class="text-center"><input type="checkbox" name="update.SalesOrders"></td>
                          <td class="text-center"><input type="checkbox" name="delete.SalesOrders"></td>
                        </tr>
                        <tr>
                          <td>Sales Invoices</td>
                          <td class="text-center"><input type="checkbox" name="create.SalesInvoices"></td>
                          <td class="text-center"><input type="checkbox" name="read.SalesInvoices"></td>
                          <td class="text-center"><input type="checkbox" name="update.SalesInvoices"></td>
                          <td class="text-center"><input type="checkbox" name="delete.SalesInvoices"></td>
                        </tr>
                        <tr>
                          <td>Finance Reports</td>
                          <td class="text-center"><input type="checkbox" name="create.FinanceReports"></td>
                          <td class="text-center"><input type="checkbox" name="read.FinanceReports"></td>
                          <td class="text-center"><input type="checkbox" name="update.FinanceReports"></td>
                          <td class="text-center"><input type="checkbox" name="delete.FinanceReports"></td>
                        </tr>
                        <tr>
                          <td>Reports - Sales Order</td>
                          <td class="text-center"><input type="checkbox" name="create.SalesOrderReports"></td>
                          <td class="text-center"><input type="checkbox" name="read.SalesOrderReports"></td>
                          <td class="text-center"><input type="checkbox" name="update.SalesOrderReports"></td>
                          <td class="text-center"><input type="checkbox" name="delete.SalesOrderReports"></td>
                        </tr>
                        <tr>
                          <td>Reports - Sales Invoices</td>
                          <td class="text-center"><input type="checkbox" name="create.SalesInvoicesReports"></td>
                          <td class="text-center"><input type="checkbox" name="read.SalesInvoicesReports"></td>
                          <td class="text-center"><input type="checkbox" name="update.SalesInvoicesReports"></td>
                          <td class="text-center"><input type="checkbox" name="delete.SalesInvoicesReports"></td>
                        </tr>
                        <tr>
                          <td>Reports - Checkin</td>
                          <td class="text-center"><input type="checkbox" name="create.CheckInReports"></td>
                          <td class="text-center"><input type="checkbox" name="read.CheckInReports"></td>
                          <td class="text-center"><input type="checkbox" name="update.CheckInReports"></td>
                          <td class="text-center"><input type="checkbox" name="delete.CheckInReports"></td>
                        </tr>
                        <tr>
                            <td colspan="5" class="text-center"><input type="checkbox" id="select-all" name="allIncluded"> Select All Auth</td>
                        </tr>
                      </tbody>
                        </table>
                      </div>
                  </div>
                </div>
              </div>
              </div>
                <div class="col-md-12">
                    <div class="form-group form-animate-checkbox" style="margin-top:40px !important;">
                        <input type="submit" value="Save New Auth" class="submit btn btn-primary">
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    // Klik Checkbox Select Alls
    const selectAll = document.getElementById('select-all').addEventListener("click", pilihcheckbox);
    console.log(selectAll);
    function pilihcheckbox() {
        if (this.checked) {
            $(':checkbox').each(function(){
                this.checked=true;
            })
        } else {
            $(':checkbox').each(function(){
                this.checked = false;
            })

        }
    }
</script>
@endsection
