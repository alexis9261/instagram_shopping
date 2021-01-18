@extends('cms.index')


@section('content')
<section>


  @if(session('error'))
        <div class="alert alert-danger my-3" role="alert">
          {{session('error')}}
        </div>
  @endif
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1>Mensajes de contacto</h1>
  </div>

  <div class="table-responsive">
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th>#</th>
          <th>Nombre</th>
          <th>Correo</th>
          <th>Telefono</th>
          <th>Mensaje</th>
          <th>Acción</th>
        </tr>
      </thead>
      <tbody>
        @foreach($messages as $message)

          <tr>
            <td>{{$message->id}}</td>
            <td>
              {{$message->name}}
            </td>
            <td>{{$message->email}}</td>
            <td>{{$message->phone}}</td>
            <td>{{substr($message->message, 0, 50)}} ...</td>
            <td class="d-flex ">
              <button class="btn btn-outline-success mensaje" id="{{$message->id}}" data-toggle="modal" data-target="#modalMensaje">Ver más</button>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</section>
<div class="modal fade" id="modalMensaje" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Mensaje de contacto</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <h6 id="modal_id"></h6>
          <h6 id="modal_name"></h6>
          <h6 id="modal_email"></h6>
          <h6 id="modal_phone"></h6>
          <p id="modal_message"></p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>


  <script type="text/javascript">
    let messageButtons = document.querySelectorAll('.mensaje');

    if(messageButtons)
    {
      messageButtons.forEach(button => {
        button.addEventListener('click', (e) => {
          let id = e.target.id
          getMessage(id);
        })
      })
    }


    function getMessage(id)
    {
      axios.get(`/cms/message/get/${id}`)
        .then(response => {
          let id_modal = response.data.id,
              name = response.data.name,
              email = response.data.email,
              phone = response.data.phone,
              message = response.data.message;

          modalMessage(id_modal, name, email, phone, message)
        })
    }


    function modalMessage(id,name,email,phone,message)
    {
      let id_modal = document.getElementById('modal_id'),
          name_modal = document.getElementById('modal_name'),
          email_modal = document.getElementById('modal_email'),
          phone_modal = document.getElementById('modal_phone'),
          message_modal = document.getElementById('modal_message');

          id_modal.innerHTML = `#: <strong>${id}</strong>`
          name_modal.innerHTML = `Nombre: <strong>${name}</strong>`
          email_modal.innerHTML = `Correo: <strong>${email}</strong>`
          phone_modal.innerHTML = `Telefono: <strong>${phone}</strong>`
          message_modal.innerHTML = `Mensaje: <br>
            <strong> ${message} </strong>
          `
    }
  </script>
@endsection
