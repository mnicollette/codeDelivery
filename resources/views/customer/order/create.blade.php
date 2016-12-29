@extends('app')

@section('content')
    <div class="container">
        <h2>Novo Pedido</h2>
        <br>

        <br>

        @include('errors._check')


        {!! Form::open(['route'=>'customer.order.store','class'=>'form']) !!}

        <div class="form-group">
            <label>Total: </label>
            <p id="total">R$ 00,00</p>
            <a href="#" id="btnNewItem" class="btn btn-default">Novo item</a>

            <table class="table">
                <thead>
                    <tr>
                        <th>Produto</th>
                        <th>Qtd.</th>
                    </tr>
                </thead>
                <tbody>
                <tr>
                    <td>
                        <select class="form-control" name="items[0][product_id]">
                            <option value="0" data-price="0">Selecione o Produto</option>
                            @foreach($products as $p)
                                <option value="{{ $p->id }}" data-price="{{$p->price}}">{{$p->name}} --- {{$p->price}}</option>
                                @endforeach

                        </select>

                    </td>
                    <td>
                        <select class="form-control" name="items[0][qtd]">
                            @for($i=1;$i<=50;$i++)
                                <option value="{{ $i }}">{{ $i }}</option>
                            @endfor

                        </select>

                    </td>
                </tr>
                </tbody>
            </table>
            
            
        </div>

        <div class="form-group">
            {!! Form::submit('Cadastrar Pedido',['class'=>'btn btn-submit']) !!}
        </div>

        {!! Form::close() !!}

    </div>
@endsection

@section('post-script')
    <script>
        $('#btnNewItem').click(function(){

           var row = $('table tbody > tr:last'),
               newRow = row.clone(),
               length = $('table tbody > tr').length;

           newRow.find('td').each(function(){

              var td = $(this),
                  input = td.find('input,select'),
                  name = input.attr('name');

              input.attr('name', name.replace((length -1)+ "", length + ""));


           });

           newRow.find('input').val(1);
           newRow.insertAfter(row);

            calculateTotal();

        });

        $(document.body).on('change','select', function(){
            calculateTotal();
        });


        function calculateTotal(){

            var total = 0,
            trLen = $('table tbody tr').length,
            tr = null, price, qtd;

            for(var i=0;i<trLen;i++){
                tr = $('table tbody tr').eq(i);
                price = tr.find(':selected').data('price');
                qtd = tr.find('select[name="items['+i+'][qtd]"]').val();

                total += price * qtd;

            }

            $('#total').html("R$ "+total);

        }

    </script>
@endsection