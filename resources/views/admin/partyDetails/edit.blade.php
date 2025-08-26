@extends('layouts.admin')
@section('content')
<div class="content">

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ trans('global.edit') }} {{ trans('cruds.partyDetail.title_singular') }}
                </div>
                <div class="panel-body">
                    <form method="POST" action="{{ route("admin.party-details.update", [$partyDetail->id]) }}" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="form-group {{ $errors->has('party_name') ? 'has-error' : '' }}">
                            <label class="required" for="party_name">{{ trans('cruds.partyDetail.fields.party_name') }}</label>
                            <input class="form-control" type="text" name="party_name" id="party_name" value="{{ old('party_name', $partyDetail->party_name) }}" required>
                            @if($errors->has('party_name'))
                                <span class="help-block" role="alert">{{ $errors->first('party_name') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.partyDetail.fields.party_name_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('gstin') ? 'has-error' : '' }}">
                            <label class="required" for="gstin">{{ trans('cruds.partyDetail.fields.gstin') }}</label>
                            <input class="form-control" type="text" name="gstin" id="gstin" value="{{ old('gstin', $partyDetail->gstin) }}" required>
                            @if($errors->has('gstin'))
                                <span class="help-block" role="alert">{{ $errors->first('gstin') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.partyDetail.fields.gstin_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('phone_number') ? 'has-error' : '' }}">
                            <label class="required" for="phone_number">{{ trans('cruds.partyDetail.fields.phone_number') }}</label>
                            <input class="form-control" type="text" name="phone_number" id="phone_number" value="{{ old('phone_number', $partyDetail->phone_number) }}" required>
                            @if($errors->has('phone_number'))
                                <span class="help-block" role="alert">{{ $errors->first('phone_number') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.partyDetail.fields.phone_number_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('pan_number') ? 'has-error' : '' }}">
                            <label for="pan_number">{{ trans('cruds.partyDetail.fields.pan_number') }}</label>
                            <input class="form-control" type="text" name="pan_number" id="pan_number" value="{{ old('pan_number', $partyDetail->pan_number) }}">
                            @if($errors->has('pan_number'))
                                <span class="help-block" role="alert">{{ $errors->first('pan_number') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.partyDetail.fields.pan_number_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('place_of_supply') ? 'has-error' : '' }}">
                            <label for="place_of_supply">{{ trans('cruds.partyDetail.fields.place_of_supply') }}</label>
                            <input class="form-control" type="text" name="place_of_supply" id="place_of_supply" value="{{ old('place_of_supply', $partyDetail->place_of_supply) }}">
                            @if($errors->has('place_of_supply'))
                                <span class="help-block" role="alert">{{ $errors->first('place_of_supply') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.partyDetail.fields.place_of_supply_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('type_of_supply') ? 'has-error' : '' }}">
                            <label>{{ trans('cruds.partyDetail.fields.type_of_supply') }}</label>
                            <select class="form-control" name="type_of_supply" id="type_of_supply">
                                <option value disabled {{ old('type_of_supply', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                                @foreach(App\Models\PartyDetail::TYPE_OF_SUPPLY_SELECT as $key => $label)
                                    <option value="{{ $key }}" {{ old('type_of_supply', $partyDetail->type_of_supply) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('type_of_supply'))
                                <span class="help-block" role="alert">{{ $errors->first('type_of_supply') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.partyDetail.fields.type_of_supply_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('gst_type') ? 'has-error' : '' }}">
                            <label>{{ trans('cruds.partyDetail.fields.gst_type') }}</label>
                            <select class="form-control" name="gst_type" id="gst_type">
                                <option value disabled {{ old('gst_type', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                                @foreach(App\Models\PartyDetail::GST_TYPE_SELECT as $key => $label)
                                    <option value="{{ $key }}" {{ old('gst_type', $partyDetail->gst_type) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('gst_type'))
                                <span class="help-block" role="alert">{{ $errors->first('gst_type') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.partyDetail.fields.gst_type_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('pincode') ? 'has-error' : '' }}">
                            <label class="required" for="pincode">{{ trans('cruds.partyDetail.fields.pincode') }}</label>
                            <input class="form-control" type="text" name="pincode" id="pincode" value="{{ old('pincode', $partyDetail->pincode) }}" required>
                            @if($errors->has('pincode'))
                                <span class="help-block" role="alert">{{ $errors->first('pincode') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.partyDetail.fields.pincode_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('state') ? 'has-error' : '' }}">
                            <label for="state">{{ trans('cruds.partyDetail.fields.state') }}</label>
                            <input class="form-control" type="text" name="state" id="state" value="{{ old('state', $partyDetail->state) }}">
                            @if($errors->has('state'))
                                <span class="help-block" role="alert">{{ $errors->first('state') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.partyDetail.fields.state_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('city') ? 'has-error' : '' }}">
                            <label for="city">{{ trans('cruds.partyDetail.fields.city') }}</label>
                            <input class="form-control" type="text" name="city" id="city" value="{{ old('city', $partyDetail->city) }}">
                            @if($errors->has('city'))
                                <span class="help-block" role="alert">{{ $errors->first('city') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.partyDetail.fields.city_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('billing_address') ? 'has-error' : '' }}">
                            <label for="billing_address">{{ trans('cruds.partyDetail.fields.billing_address') }}</label>
                            <textarea class="form-control ckeditor" name="billing_address" id="billing_address">{!! old('billing_address', $partyDetail->billing_address) !!}</textarea>
                            @if($errors->has('billing_address'))
                                <span class="help-block" role="alert">{{ $errors->first('billing_address') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.partyDetail.fields.billing_address_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('shipping_address') ? 'has-error' : '' }}">
                            <label for="shipping_address">{{ trans('cruds.partyDetail.fields.shipping_address') }}</label>
                            <textarea class="form-control ckeditor" name="shipping_address" id="shipping_address">{!! old('shipping_address', $partyDetail->shipping_address) !!}</textarea>
                            @if($errors->has('shipping_address'))
                                <span class="help-block" role="alert">{{ $errors->first('shipping_address') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.partyDetail.fields.shipping_address_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                            <label for="email">{{ trans('cruds.partyDetail.fields.email') }}</label>
                            <input class="form-control" type="email" name="email" id="email" value="{{ old('email', $partyDetail->email) }}">
                            @if($errors->has('email'))
                                <span class="help-block" role="alert">{{ $errors->first('email') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.partyDetail.fields.email_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('opening_balance') ? 'has-error' : '' }}">
                            <label class="required" for="opening_balance">{{ trans('cruds.partyDetail.fields.opening_balance') }}</label>
                            <input class="form-control" type="number" name="opening_balance" id="opening_balance" value="{{ old('opening_balance', $partyDetail->opening_balance) }}" step="0.01" required>
                            @if($errors->has('opening_balance'))
                                <span class="help-block" role="alert">{{ $errors->first('opening_balance') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.partyDetail.fields.opening_balance_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('as_of_date') ? 'has-error' : '' }}">
                            <label for="as_of_date">{{ trans('cruds.partyDetail.fields.as_of_date') }}</label>
                            <input class="form-control date" type="text" name="as_of_date" id="as_of_date" value="{{ old('as_of_date', $partyDetail->as_of_date) }}">
                            @if($errors->has('as_of_date'))
                                <span class="help-block" role="alert">{{ $errors->first('as_of_date') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.partyDetail.fields.as_of_date_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('opening_balance_type') ? 'has-error' : '' }}">
                            <label>{{ trans('cruds.partyDetail.fields.opening_balance_type') }}</label>
                            <select class="form-control" name="opening_balance_type" id="opening_balance_type">
                                <option value disabled {{ old('opening_balance_type', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                                @foreach(App\Models\PartyDetail::OPENING_BALANCE_TYPE_SELECT as $key => $label)
                                    <option value="{{ $key }}" {{ old('opening_balance_type', $partyDetail->opening_balance_type) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('opening_balance_type'))
                                <span class="help-block" role="alert">{{ $errors->first('opening_balance_type') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.partyDetail.fields.opening_balance_type_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('credit_limit') ? 'has-error' : '' }}">
                            <label class="required">{{ trans('cruds.partyDetail.fields.credit_limit') }}</label>
                            @foreach(App\Models\PartyDetail::CREDIT_LIMIT_RADIO as $key => $label)
                                <div>
                                    <input type="radio" id="credit_limit_{{ $key }}" name="credit_limit" value="{{ $key }}" {{ old('credit_limit', $partyDetail->credit_limit) === (string) $key ? 'checked' : '' }} required>
                                    <label for="credit_limit_{{ $key }}" style="font-weight: 400">{{ $label }}</label>
                                </div>
                            @endforeach
                            @if($errors->has('credit_limit'))
                                <span class="help-block" role="alert">{{ $errors->first('credit_limit') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.partyDetail.fields.credit_limit_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('credit_limit_amount') ? 'has-error' : '' }}">
                            <label for="credit_limit_amount">{{ trans('cruds.partyDetail.fields.credit_limit_amount') }}</label>
                            <input class="form-control" type="number" name="credit_limit_amount" id="credit_limit_amount" value="{{ old('credit_limit_amount', $partyDetail->credit_limit_amount) }}" step="0.01">
                            @if($errors->has('credit_limit_amount'))
                                <span class="help-block" role="alert">{{ $errors->first('credit_limit_amount') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.partyDetail.fields.credit_limit_amount_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('payment_terms') ? 'has-error' : '' }}">
                            <label for="payment_terms">{{ trans('cruds.partyDetail.fields.payment_terms') }}</label>
                            <input class="form-control" type="text" name="payment_terms" id="payment_terms" value="{{ old('payment_terms', $partyDetail->payment_terms) }}">
                            @if($errors->has('payment_terms'))
                                <span class="help-block" role="alert">{{ $errors->first('payment_terms') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.partyDetail.fields.payment_terms_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('ifsc_code') ? 'has-error' : '' }}">
                            <label for="ifsc_code">{{ trans('cruds.partyDetail.fields.ifsc_code') }}</label>
                            <input class="form-control" type="text" name="ifsc_code" id="ifsc_code" value="{{ old('ifsc_code', $partyDetail->ifsc_code) }}">
                            @if($errors->has('ifsc_code'))
                                <span class="help-block" role="alert">{{ $errors->first('ifsc_code') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.partyDetail.fields.ifsc_code_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('account_number') ? 'has-error' : '' }}">
                            <label for="account_number">{{ trans('cruds.partyDetail.fields.account_number') }}</label>
                            <input class="form-control" type="text" name="account_number" id="account_number" value="{{ old('account_number', $partyDetail->account_number) }}">
                            @if($errors->has('account_number'))
                                <span class="help-block" role="alert">{{ $errors->first('account_number') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.partyDetail.fields.account_number_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('bank_name') ? 'has-error' : '' }}">
                            <label for="bank_name">{{ trans('cruds.partyDetail.fields.bank_name') }}</label>
                            <input class="form-control" type="text" name="bank_name" id="bank_name" value="{{ old('bank_name', $partyDetail->bank_name) }}">
                            @if($errors->has('bank_name'))
                                <span class="help-block" role="alert">{{ $errors->first('bank_name') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.partyDetail.fields.bank_name_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('branch') ? 'has-error' : '' }}">
                            <label for="branch">{{ trans('cruds.partyDetail.fields.branch') }}</label>
                            <input class="form-control" type="text" name="branch" id="branch" value="{{ old('branch', $partyDetail->branch) }}">
                            @if($errors->has('branch'))
                                <span class="help-block" role="alert">{{ $errors->first('branch') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.partyDetail.fields.branch_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('notes') ? 'has-error' : '' }}">
                            <label for="notes">{{ trans('cruds.partyDetail.fields.notes') }}</label>
                            <textarea class="form-control ckeditor" name="notes" id="notes">{!! old('notes', $partyDetail->notes) !!}</textarea>
                            @if($errors->has('notes'))
                                <span class="help-block" role="alert">{{ $errors->first('notes') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.partyDetail.fields.notes_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('status') ? 'has-error' : '' }}">
                            <label>{{ trans('cruds.partyDetail.fields.status') }}</label>
                            <select class="form-control" name="status" id="status">
                                <option value disabled {{ old('status', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                                @foreach(App\Models\PartyDetail::STATUS_SELECT as $key => $label)
                                    <option value="{{ $key }}" {{ old('status', $partyDetail->status) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('status'))
                                <span class="help-block" role="alert">{{ $errors->first('status') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.partyDetail.fields.status_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-danger" type="submit">
                                {{ trans('global.save') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>



        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    $(document).ready(function () {
  function SimpleUploadAdapter(editor) {
    editor.plugins.get('FileRepository').createUploadAdapter = function(loader) {
      return {
        upload: function() {
          return loader.file
            .then(function (file) {
              return new Promise(function(resolve, reject) {
                // Init request
                var xhr = new XMLHttpRequest();
                xhr.open('POST', '{{ route('admin.party-details.storeCKEditorImages') }}', true);
                xhr.setRequestHeader('x-csrf-token', window._token);
                xhr.setRequestHeader('Accept', 'application/json');
                xhr.responseType = 'json';

                // Init listeners
                var genericErrorText = `Couldn't upload file: ${ file.name }.`;
                xhr.addEventListener('error', function() { reject(genericErrorText) });
                xhr.addEventListener('abort', function() { reject() });
                xhr.addEventListener('load', function() {
                  var response = xhr.response;

                  if (!response || xhr.status !== 201) {
                    return reject(response && response.message ? `${genericErrorText}\n${xhr.status} ${response.message}` : `${genericErrorText}\n ${xhr.status} ${xhr.statusText}`);
                  }

                  $('form').append('<input type="hidden" name="ck-media[]" value="' + response.id + '">');

                  resolve({ default: response.url });
                });

                if (xhr.upload) {
                  xhr.upload.addEventListener('progress', function(e) {
                    if (e.lengthComputable) {
                      loader.uploadTotal = e.total;
                      loader.uploaded = e.loaded;
                    }
                  });
                }

                // Send request
                var data = new FormData();
                data.append('upload', file);
                data.append('crud_id', '{{ $partyDetail->id ?? 0 }}');
                xhr.send(data);
              });
            })
        }
      };
    }
  }

  var allEditors = document.querySelectorAll('.ckeditor');
  for (var i = 0; i < allEditors.length; ++i) {
    ClassicEditor.create(
      allEditors[i], {
        extraPlugins: [SimpleUploadAdapter]
      }
    );
  }
});
</script>

@endsection