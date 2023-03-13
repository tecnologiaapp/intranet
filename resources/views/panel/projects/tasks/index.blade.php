@extends('panel.app')

@section('title', 'Tareas del segumiento')
@section('content')

<div class="nk-content">
   <div class="container-fluid">
      <div class="nk-content-inner">
         <div class="nk-content-body">
            <div class="nk-block-head nk-block-head-sm">
               <div class="nk-block-between">
                  <div class="nk-block-head-content">
                     <div class="nk-block-des text-soft">
                        {{-- <p>You have total 95 projects.</p> --}}
                     </div>
                  </div>
                  <!-- .nk-block-head-content -->
                  <div class="nk-block-head-content">
                     <div class="toggle-wrap nk-block-tools-toggle">
                        <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em class="icon ni ni-menu-alt-r"></em></a>
                        <div class="toggle-expand-content" data-content="pageMenu">
                           <ul class="nk-block-tools g-3">
                              <li class="nk-block-tools-opt">
                                 <button type="button" class="btn btn btn-white btn-dim btn-outline-light" data-toggle="modal" data-target="#modalAddTask"><em class="icon lni lni-plus"></em><span>Agregar tarea</span></button>
                              </li>
                              <li class="nk-block-tools-opt">
                                 <button type="button" class="btn btn btn-primary" data-toggle="modal" data-target="#modalAddBoard"><em class="icon lni lni-plus"></em><span>Agregar tablero</span></button>
                              </li>
                           </ul>
                        </div>
                     </div>
                     <!-- .toggle-wrap -->
                  </div>
                  <!-- .nk-block-head-content -->
               </div>
               <!-- .nk-block-between -->
            </div>
            <!-- .nk-block-head -->
            <div class="nk-block">

               <!-- Modal Content Code -->
               <div class="modal fade" tabindex="-1" id="modalAddTask">
                  <div class="modal-dialog" role="document">
                     <div class="modal-content">
                        <a href="#" class="close" data-dismiss="modal" aria-label="Close"> <em class="icon lni lni-close"></em> </a>
                        <div class="modal-header"><h5 class="modal-title">Agregar tarea al seguimiento</h5></div>
                        <div class="modal-body">
                           <form class="form-validate is-alter" novalidate="novalidate">
                              <div class="form-group">
                                 <label class="form-label" for="title">Título de la tarea</label>
                                 <div class="form-control-wrap">
                                    <input type="text" class="form-control" id="title" name="title" required=""/>
                                 </div>
                              </div>

                              <div class="form-group mt-3">
                                 <label class="form-label" for="title">Tablero</label>
                                 <div class="form-control-wrap">
                                    <select name="board_id" class="form-select form-control form-control-lg" aria-hidden="true">
                                       @foreach($boards as $board)
                                       <option value="{{ $board->id }}">{{ $board->title }}</option>
                                       @endforeach
                                    </select>
                                 </div>
                              </div>

                              <div class="form-group mt-3">
                                 <label class="form-label" for="title">Descripción</label>
                                 <div class="form-control-wrap">
                                    <textarea class="form-control" id="description" name="description"></textarea>
                                 </div>
                              </div>

                              <div class="form-group">
                                 <label class="form-label" for="budget">Presupuesto de la tarea</label>
                                 <div class="form-control-wrap">
                                    <input type="number" class="form-control" id="budget" name="budget" required=""/>
                                 </div>
                              </div>

                              <div class="form-group">
                                 <label class="form-label" for="end_date">Fecha de finalización</label>
                                 <div class="form-control-wrap">
                                    <input type="date" class="form-control" id="end_date" name="end_date" required=""/>
                                 </div>
                              </div>

                              <div class="form-group">
                                 <label class="form-label">Asignar esta tarea a:</label>
                                 <div class="form-control-wrap">
                                    <select class="form-select" multiple="multiple" name="users[]" data-placeholder="Selecciona los contratistas involucrados">
                                       @foreach($users as $user)
                                       <option value="{{ $user->id }}">
                                          {{ $user->name }} - {{ $user->email }}
                                       </option>
                                       @endforeach
                                    </select>
                                 </div>
                              </div>

                              <div class="text-right mt-5">
                                 <div class="form-group">
                                    <button type="button" class="btn btn-lg btn-danger" class="close" data-dismiss="modal" aria-label="Close">Cancelar</button>
                                    <button class="ml-2 btn btn-lg btn-primary add_task">Guardar</button>
                                 </div>
                              </div>
                           </form>
                        </div>

                        <div class="modal-footer bg-light"><span class="sub-text">Esta sección está en modo desarrollo</span></div>
                     </div>
                  </div>
               </div>

               <div class="modal fade" tabindex="-1" id="modalAddBoard">
                  <div class="modal-dialog" role="document">
                     <div class="modal-content">
                        <a href="#" class="close" data-dismiss="modal" aria-label="Close"> <em class="icon lni lni-close"></em> </a>
                        <div class="modal-header"><h5 class="modal-title">Agregar tablero</h5></div>
                        <div class="modal-body">
                           <form action="{{ route('panel.projects.board.store', $project) }}" class="form-validate is-alter" novalidate="novalidate" method="POST">
                              @csrf
                              <div class="form-group">
                                 <label class="form-label" for="board_title">Título del tablero</label>
                                 <div class="form-control-wrap">
                                    <input type="text" class="form-control" id="board_title" name="board_title" required=""/>
                                 </div>
                              </div>

                              <div class="text-right mt-5">
                                 <div class="form-group">
                                    <button type="button" class="btn btn-lg btn-danger" class="close" data-dismiss="modal" aria-label="Close">Cancelar</button>
                                    <button type="submit" class="ml-2 btn btn-lg btn-primary add_board">Guardar</button>
                                 </div>
                              </div>
                           </form>
                        </div>

                        <div class="modal-footer bg-light"><span class="sub-text">Esta sección está en modo desarrollo</span></div>
                     </div>
                  </div>
               </div>
               
               <div id="kanban" class="nk-kanban"></div>
            </div>
            <!-- .nk-block -->
         </div>
      </div>
   </div>
</div>
@endsection

@push('scripts')
   <script src="{{ asset('assets/panel/js/jkanban.js')}}"></script>
   {{-- <script src="{{ asset('assets/panel/js/kanban.js')}}"></script> --}}

   <script type="text/javascript">
      "use strict";
      !function (NioApp, $) {
         "use strict"; // Variable
         var $win = $(window),
         $body = $('body'),
         breaks = NioApp.Break;

         NioApp.Kanban = function () {
            function titletemplate(title, count) {
               var optionicon = arguments.length > 2 && arguments[2] !== undefined ? arguments[2] : "more-h";
               return "\n <div class=\"kanban-title-content\">\n <h6 class=\"title\">".concat(title, "</h6>\n <span class=\"badge badge-pill badge-outline-light text-dark\">").concat(count, "</span>\n </div>\n <div class=\"kanban-title-content\">\n <div class=\"drodown\">\n <a href=\"#\" class=\"dropdown-toggle btn btn-sm btn-icon btn-trigger mr-n1\" data-toggle=\"dropdown\"><em class=\"icon ni ni-").concat(optionicon, "\"></em></a>\n <div class=\"dropdown-menu dropdown-menu-right\">\n <ul class=\"link-list-opt no-bdr\">\n <li><a href=\"#\"><em class=\"icon lni lni-pencil\"></em><span>Editar tablero</span></a></li>\n <li><a href=\"#\"><em class=\"icon lni lni-plus\"></em><span>Agregar tarea</span></a></li>\n <li><a href=\"#\"><em class=\"icon lni lni-plus\"></em><span>Agregar opción</span></a></li>\n </ul>\n </div>\n </div>\n </div>\n ");
            }

            var kanban = new jKanban({
               element: '#kanban',
               gutter: '0',
               widthBoard: '320px',
               responsivePercentage: false,
               boards: [
               @foreach($boards as $board)
               {
                  'id': '{{ $board->id }}',
                  'title': titletemplate("{{ $board->title }}", "{{ $board->tasks->count() }}"),
                  'class': 'kanban-light',
                  //Grupo de tareas
                  'item': [
                     //Tareas del tablero
                     @foreach($board->tasks as $task)
                     {
                        'title': "\n <div class=\"kanban-item-title\">\n <h6 class=\"title\">{{ $task->title }}</h6>\n <div class=\"drodown\">\n <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">\n <div class=\"user-avatar-group\">\n <div class=\"user-avatar xs bg-primary\"><span><div class=\"user-avatar sm bg-primary\"><span><img src=\"{{ asset($task->user->thumbnail()) }}\" alt=\"\"></span></div></span></div>\n </div>\n </a>\n <div class=\"dropdown-menu dropdown-menu-right\">\n <ul class=\"link-list-opt no-bdr p-3 g-2\">\n <li>\n <div class=\"user-name\">\n <span class=\"tb-lead\">{{ $task->user->name }}</span>\n </div>\n </div>\n </li>\n </ul>\n </div>\n </div>\n </div>\n <div class=\"kanban-item-text\">\n <p>{{ $task->description }}</p>\n </div>\n <ul class=\"kanban-item-tags\">\n <li><span class=\"badge badge-info\">Etiqueta </span></li>\n <li><span class=\"badge badge-info\">Etiqueta</span></li>\n </ul>\n <div class=\"kanban-item-meta\">\n <ul class=\"kanban-item-meta-list\">\n <li class=\"@if($task->days_left() <= 3)text-danger @endif @if($task->days_left() > 3) text-dark @endif \"><em class=\"icon lni lni-calendar\"></em><span>Faltan {{ $task->days_left() }} días</span></li>\n </ul>\n <ul class=\"kanban-item-meta-list\">\n <li><em class=\"icon lni lni-paperclip\"></em><span>1</span></li>\n <li><em class=\"icon lni lni-comments\"></em><span>4</span></li>\n </ul>\n</div>\n<div><a href=\"{{ route('panel.projects.board.task.show', [$project, $task]) }}\" target=\"_blank\" class=\"mt-3 btn btn btn-white btn-dim btn-outline-light btn-sm btn-block\">Ver detalles</a></div>\n"
                     },
                     @endforeach
                  ] //Fin del grupo de tareas
               },
               @endforeach
               ]
            });

            for (var i = 0; i < kanban.options.boards.length; i++) {
               var board = kanban.findBoard(kanban.options.boards[i].id);
               $(board).find("footer").html("<button type=\"button\" data-toggle=\"modal\" data-target=\"#modalAddTask\" class=\"kanban-add-task btn btn-block\"><em class=\"icon lni lni-plus\"></em><span>Agregar otra tarea</span></button>");
            }
         };
         NioApp.coms.docReady.push(NioApp.Kanban);
      }(NioApp, jQuery);
   </script>   

   <script type="text/javascript">
      $(".add_task").click(function(e){
         e.preventDefault();
         let title = $("input[name=title]").val();
         let board_id = $("select[name=board_id]").val();
         let description = $("textarea[name=description]").val();
         let budget = $("input[name=budget]").val();
         let end_date = $("input[name=end_date]").val();
         let users = $("select[name='users[]']").val();
         let token = $('meta[name="csrf-token"]').attr('content');

         $.ajax({
            url: '{{ route('panel.projects.tasks.store', $project) }}',
            type: 'POST',
            data: {
               "_token": "{{ csrf_token() }}",
               "title": title,
               "board_id": board_id,
               "project_id": {{ $project->id }},
               "description": description,
               "budget": budget,
               "end_date": end_date,
               "users": users
            }, 
            success: function (result) {
               console.log(result);
               if (result.success == true) {
                  $('#modalAddTask').modal('hide');
                  $('#successModal').modal('show');
                  $('#successModalMessage').append(result.message);
                  $("input[name=title]").val("");
                  $("textarea[name=description]").val("");
                  $("input[name=budget]").val("");
                  $("input[name=end_date]").val("");
                  $("select[name='users[]']").val("");
               } else {
                  $('#modalAddTask').modal('hide');
                  $('#errorModal').modal('show');
                  $('#errorModalMessage').append(result.message);
               }
            },
            error: function (result) {
               $('#modalAddTask').modal('hide');
               $('#errorModal').modal('show');
               $('#errorModalMessage').append("Ha ocurrido un error, por favor intenta nuevamente.");
            }
         });  
      });
   </script>
@endpush