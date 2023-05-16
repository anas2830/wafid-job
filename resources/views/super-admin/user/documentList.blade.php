<table class="table table-bordered table-hover datatable-highlight data-list" id="offersTable">
    <thead>
        <tr>
            <th width="30%">Passport Copy</th>
            <th width="30%">Medical Report</th>
            <th width="30%">Bank Receipt</th>
        </tr>
    </thead>
    <tbody>

        @if(empty($user_documents))
            <tr>
                <td colspan="3">No Documents Here</td>
            </tr>
        @else 
            <tr>
                <td>
                    @if(isset($user_documents->passport_name))
                        <a target="_blank" href="{{ asset('uploads/userDocument/'.$user_documents->passport_name) }}" download>{{ $user_documents->passport_original_name }}</a>
                    @else 
                        No File Found
                    @endif
                </td>
                <td>
                    @if(count($user_medical_document) > 0)
                        @foreach($user_medical_document as $document)
                            <a target="_blank" href="{{ asset('uploads/userDocument/'.$document->medical_name) }}" download>{{ $document->medical_original_name }}</a> </br>
                        @endforeach
                    @else 
                        No File Found
                    @endif
                </td>
                <td>
                    @if(isset($user_documents->bank_name))
                        <a target="_blank" href="{{ asset('uploads/userDocument/'.$user_documents->bank_name) }}" download>{{ $user_documents->bank_original_name }}</a>
                    @else 
                        No File Found
                    @endif
                </td>
            </tr> 
        @endif
       
    </tbody>
</table>