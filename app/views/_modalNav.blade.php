<!-- Modal Window -->
<div class="modal fade" id="navModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Generate XML </h4>
            </div>
            <div class="modal-body">
                <div class="row">
                <div class="col-md-4">
                    <a href="{{ URL::route('LocalPurchases.create') }}" class="btn btn-success">Local Purchases</a>
                </div>
                <div class="col-md-4">
                    <a href="{{ URL::route('creditNotes.create') }}" class="btn btn-success">Credit Notes</a>

                </div>
                <div class="col-md-4">
                    <a href="{{ URL::route('DebitNotes.create') }}" class="btn btn-success">Debit Notes</a>
                </div>

            </div>

            </div>
        </div>
    </div>
</div>