<div class="nk-sidebar-main is-light">
	<div class="nk-sidebar-inner" data-simplebar>
      @role('rh')
		<div class="nk-menu-content menu-active" data-content="navDashboards">
			<h5 class="title">Contratistas</h5>
			<ul class="nk-menu">
				<li class="nk-menu-item">
					<a href="{{ route('panel.user.index') }}" class="nk-menu-link">
						<span class="nk-menu-icon"><em class="icon ni ni-users"></em></span>
						<span class="nk-menu-text">Todos los contratistas</span>
					</a>
				</li>

				<li class="nk-menu-item">
					<a href="{{ route('panel.user.create') }}" class="nk-menu-link">
						<span class="nk-menu-icon"><em class="icon ni ni-user-add"></em></span>
						<span class="nk-menu-text">Agregar contratista</span>
					</a>
				</li>

            <li class="nk-menu-item">
               <a href="{{ route('panel.user.inactive.index') }}" class="nk-menu-link">
                  <span class="nk-menu-icon"><em class="icon ni ni-user-remove"></em></span>
                  <span class="nk-menu-text">Contratistas inactivos</span>
               </a>
            </li>

            <hr>

            <li class="nk-menu-item">
               <a href="{{ route('panel.user.dependency.index', 'direccion-general') }}" class="nk-menu-link">
                  <span class="nk-menu-icon"><em class="icon ni ni-check-circle-cut"></em></span>
                  <span class="nk-menu-text">Dirección General</span>
               </a>
            </li>

            <li class="nk-menu-item">
               <a href="{{ route('panel.user.dependency.index', 'direccion-tecnica') }}" class="nk-menu-link">
                  <span class="nk-menu-icon"><em class="icon ni ni-check-circle-cut"></em></span>
                  <span class="nk-menu-text">Dirección Técnica</span>
               </a>
            </li>

            <li class="nk-menu-item">
               <a href="{{ route('panel.user.dependency.index', 'subdireccion-de-gestión-de-alianzas-público-privadas') }}" class="nk-menu-link">
                  <span class="nk-menu-icon"><em class="icon ni ni-check-circle-cut"></em></span>
                  <span class="nk-menu-text">Subdirección APP</span>
               </a>
            </li>

            <li class="nk-menu-item">
               <a href="{{ route('panel.user.dependency.index', 'subdireccion-de-gestion-inmobiliaria') }}" class="nk-menu-link">
                  <span class="nk-menu-icon"><em class="icon ni ni-check-circle-cut"></em></span>
                  <span class="nk-menu-text">Subdirección de Inmobiliaria</span>
               </a>
            </li>

            <li class="nk-menu-item">
               <a href="{{ route('panel.user.dependency.index', 'subdireccion-de-paisaje-y-patrimonio') }}" class="nk-menu-link">
                  <span class="nk-menu-icon"><em class="icon ni ni-check-circle-cut"></em></span>
                  <span class="nk-menu-text">Subdirección de Paisaje</span>
               </a>
            </li>

				
			</ul>
		</div>
      @endrole

		<!-- 
		<div class="nk-menu-content" data-content="navApps">
         <h5 class="title">Apps</h5>
         <ul class="nk-menu">
             <li class="nk-menu-item">
                 <a href="html/apps-inbox.html" class="nk-menu-link">
                     <span class="nk-menu-icon"><em class="icon ni ni-inbox-fill"></em></span>
                     <span class="nk-menu-text">Mailbox</span>
                 </a>
             </li>
             <li class="nk-menu-item">
                 <a href="html/apps-messages.html" class="nk-menu-link">
                     <span class="nk-menu-icon"><em class="icon ni ni-chat-fill"></em></span>
                     <span class="nk-menu-text">Messages</span>
                 </a>
             </li>
             <li class="nk-menu-item">
                 <a href="html/apps-file-manager.html" class="nk-menu-link">
                     <span class="nk-menu-icon"><em class="icon ni ni-folder-fill"></em></span>
                     <span class="nk-menu-text">File Manager</span>
                 </a>
             </li>
             <li class="nk-menu-item">
                 <a href="html/apps-chats.html" class="nk-menu-link">
                     <span class="nk-menu-icon"><em class="icon ni ni-chat-circle-fill"></em></span>
                     <span class="nk-menu-text">Chats</span>
                 </a>
             </li>
             <li class="nk-menu-item">
                 <a href="html/apps-calendar.html" class="nk-menu-link">
                     <span class="nk-menu-icon"><em class="icon ni ni-calender-date-fill"></em></span>
                     <span class="nk-menu-text">Calendar</span>
                 </a>
             </li>
         </ul>
     </div> -->
     <!-- 
     <div class="nk-menu-content" data-content="navPages">
         <h5 class="title">Pages</h5>
         <ul class="nk-menu">
             <li class="nk-menu-item has-sub">
                 <a href="#" class="nk-menu-link nk-menu-toggle">
                     <span class="nk-menu-icon"><em class="icon ni ni-users-fill"></em></span>
                     <span class="nk-menu-text">User Manage</span>
                 </a>
                 <ul class="nk-menu-sub">
                     <li class="nk-menu-item">
                         <a href="html/user-list-regular.html" class="nk-menu-link"><span class="nk-menu-text">User List - Regular</span></a>
                     </li>
                     <li class="nk-menu-item">
                         <a href="html/user-list-compact.html" class="nk-menu-link"><span class="nk-menu-text">User List - Compact</span></a>
                     </li>
                     <li class="nk-menu-item">
                         <a href="html/user-details-regular.html" class="nk-menu-link"><span class="nk-menu-text">User Details - Regular</span></a>
                     </li>
                     <li class="nk-menu-item">
                         <a href="html/user-profile-regular.html" class="nk-menu-link"><span class="nk-menu-text">User Profile - Regular</span></a>
                     </li>
                 </ul>
             </li>
             <li class="nk-menu-item has-sub">
                 <a href="#" class="nk-menu-link nk-menu-toggle">
                     <span class="nk-menu-icon"><em class="icon ni ni-cart-fill"></em></span>
                     <span class="nk-menu-text">Ecommerce Pages</span>
                 </a>
                 <ul class="nk-menu-sub">
                     <li class="nk-menu-item">
                         <a href="html/products.html" class="nk-menu-link"><span class="nk-menu-text">Product List</span></a>
                     </li>
                     <li class="nk-menu-item">
                         <a href="html/orders-regular.html" class="nk-menu-link"><span class="nk-menu-text">Order List - Regular</span></a>
                     </li>
                     <li class="nk-menu-item">
                         <a href="html/orders-sales.html" class="nk-menu-link"><span class="nk-menu-text">Order List - Sales</span></a>
                     </li>
                     <li class="nk-menu-item">
                         <a href="html/invoice-list.html" class="nk-menu-link"><span class="nk-menu-text">Invoices List</span></a>
                     </li>
                     <li class="nk-menu-item">
                         <a href="html/invoice-details.html" class="nk-menu-link"><span class="nk-menu-text">Invoice Details</span></a>
                     </li>
                 </ul>
             </li>
             <li class="nk-menu-item">
                 <a href="html/_blank.html" class="nk-menu-link">
                     <span class="nk-menu-icon"><em class="icon ni ni-file-fill"></em></span>
                     <span class="nk-menu-text">Blank / Startup</span>
                 </a>
             </li>
             <li class="nk-menu-item">
                 <a href="html/pages/faqs.html" class="nk-menu-link">
                     <span class="nk-menu-icon"><em class="icon ni ni-file-fill"></em></span>
                     <span class="nk-menu-text">Faqs / Help</span>
                 </a>
             </li>
             <li class="nk-menu-item">
                 <a href="html/pages/terms-policy.html" class="nk-menu-link">
                     <span class="nk-menu-icon"><em class="icon ni ni-file-fill"></em></span>
                     <span class="nk-menu-text">Terms / Policy</span>
                 </a>
             </li>
             <li class="nk-menu-item">
                 <a href="html/pages/regular-v1.html" class="nk-menu-link">
                     <span class="nk-menu-icon"><em class="icon ni ni-file-fill"></em></span>
                     <span class="nk-menu-text">Regular Page - v1</span>
                 </a>
             </li>
             <li class="nk-menu-item">
                 <a href="html/pages/regular-v2.html" class="nk-menu-link">
                     <span class="nk-menu-icon"><em class="icon ni ni-file-fill"></em></span>
                     <span class="nk-menu-text">Regular Page - v2</span>
                 </a>
             </li>
         </ul>
     </div>
     <div class="nk-menu-content" data-content="navMisc">
         <h5 class="title">Misc Pages</h5>
         <ul class="nk-menu">
             <li class="nk-menu-item">
                 <a href="html/pages/auths/auth-login.html" class="nk-menu-link" target="_blank"><span class="nk-menu-text">Login / Signin</span></a>
             </li>
             <li class="nk-menu-item">
                 <a href="html/pages/auths/auth-register.html" class="nk-menu-link" target="_blank"><span class="nk-menu-text">Register / Signup</span></a>
             </li>
             <li class="nk-menu-item">
                 <a href="html/pages/auths/auth-reset.html" class="nk-menu-link" target="_blank"><span class="nk-menu-text">Forgot Password</span></a>
             </li>
             <li class="nk-menu-item">
                 <a href="html/pages/auths/auth-success.html" class="nk-menu-link" target="_blank"><span class="nk-menu-text">Success / Confirm</span></a>
             </li>
             <li class="nk-menu-item no-icon">
                 <a href="#" class="nk-menu-link nk-menu-toggle"><span class="nk-menu-text">Classic Version - v2</span></a>
                 <ul class="nk-menu-sub">
                     <li class="nk-menu-item">
                         <a href="html/pages/auths/auth-login-v2.html" class="nk-menu-link" target="_blank"><span class="nk-menu-text">Login / Signin</span></a>
                     </li>
                     <li class="nk-menu-item">
                         <a href="html/pages/auths/auth-register-v2.html" class="nk-menu-link" target="_blank"><span class="nk-menu-text">Register / Signup</span></a>
                     </li>
                     <li class="nk-menu-item">
                         <a href="html/pages/auths/auth-reset-v2.html" class="nk-menu-link" target="_blank"><span class="nk-menu-text">Forgot Password</span></a>
                     </li>
                     <li class="nk-menu-item">
                         <a href="html/pages/auths/auth-success-v2.html" class="nk-menu-link" target="_blank"><span class="nk-menu-text">Success / Confirm</span></a>
                     </li>
                 </ul>
             </li>
             <li class="nk-menu-item no-icon">
                 <a href="#" class="nk-menu-link nk-menu-toggle"><span class="nk-menu-text">No Slider Version - v3</span></a>
                 <ul class="nk-menu-sub">
                     <li class="nk-menu-item">
                         <a href="html/pages/auths/auth-login-v3.html" class="nk-menu-link" target="_blank"><span class="nk-menu-text">Login / Signin</span></a>
                     </li>
                     <li class="nk-menu-item">
                         <a href="html/pages/auths/auth-register-v3.html" class="nk-menu-link" target="_blank"><span class="nk-menu-text">Register / Signup</span></a>
                     </li>
                     <li class="nk-menu-item">
                         <a href="html/pages/auths/auth-reset-v3.html" class="nk-menu-link" target="_blank"><span class="nk-menu-text">Forgot Password</span></a>
                     </li>
                     <li class="nk-menu-item">
                         <a href="html/pages/auths/auth-success-v3.html" class="nk-menu-link" target="_blank"><span class="nk-menu-text">Success / Confirm</span></a>
                     </li>
                 </ul>
             </li>
         </ul>
     </div>
     <div class="nk-menu-content" data-content="navError">
         <h5 class="title">Error Pages</h5>
         <ul class="nk-menu">
             <li class="nk-menu-item">
                 <a href="html/pages/errors/404-classic.html" target="_blank" class="nk-menu-link"><span class="nk-menu-text">404 Classic</span></a>
             </li>
             <li class="nk-menu-item">
                 <a href="html/pages/errors/504-classic.html" target="_blank" class="nk-menu-link"><span class="nk-menu-text">504 Classic</span></a>
             </li>
             <li class="nk-menu-item">
                 <a href="html/pages/errors/404-s1.html" target="_blank" class="nk-menu-link"><span class="nk-menu-text">404 Modern</span></a>
             </li>
             <li class="nk-menu-item">
                 <a href="html/pages/errors/504-s1.html" target="_blank" class="nk-menu-link"><span class="nk-menu-text">504 Modern</span></a>
             </li>
         </ul>
     </div> -->
     <!-- <div class="nk-menu-content" data-content="navComponents">
         <h5 class="title">Components</h5>
         <ul class="nk-menu">
             <li class="nk-menu-item has-sub">
                 <a href="#" class="nk-menu-link nk-menu-toggle">
                     <span class="nk-menu-icon"><em class="icon ni ni-layers-fill"></em></span>
                     <span class="nk-menu-text">Ui Elements</span>
                 </a>
                 <ul class="nk-menu-sub">
                     <li class="nk-menu-item">
                         <a href="html/components.html" class="nk-menu-link"><span class="nk-menu-text">Component List</span></a>
                     </li>
                     <li class="nk-menu-item">
                         <a href="html/components/elements/alerts.html" class="nk-menu-link"><span class="nk-menu-text">Alerts</span></a>
                     </li>
                     <li class="nk-menu-item">
                         <a href="html/components/elements/accordions.html" class="nk-menu-link"><span class="nk-menu-text">Accordions</span></a>
                     </li>
                     <li class="nk-menu-item">
                         <a href="html/components/elements/badges.html" class="nk-menu-link"><span class="nk-menu-text">Badges</span></a>
                     </li>
                     <li class="nk-menu-item">
                         <a href="html/components/elements/buttons.html" class="nk-menu-link"><span class="nk-menu-text">Buttons</span></a>
                     </li>
                     <li class="nk-menu-item">
                         <a href="html/components/elements/buttons-group.html" class="nk-menu-link"><span class="nk-menu-text">Button Group</span></a>
                     </li>
                     <li class="nk-menu-item">
                         <a href="html/components/elements/breadcrumb.html" class="nk-menu-link"><span class="nk-menu-text">Breadcrumb</span></a>
                     </li>
                     <li class="nk-menu-item">
                         <a href="html/components/elements/cards.html" class="nk-menu-link"><span class="nk-menu-text">Cards</span></a>
                     </li>
                     <li class="nk-menu-item">
                         <a href="html/components/elements/carousel.html" class="nk-menu-link"><span class="nk-menu-text">Carousel</span></a>
                     </li>
                     <li class="nk-menu-item">
                         <a href="html/components/elements/modals.html" class="nk-menu-link"><span class="nk-menu-text">Modals</span></a>
                     </li>
                     <li class="nk-menu-item">
                         <a href="html/components/elements/pagination.html" class="nk-menu-link"><span class="nk-menu-text">Pagination</span></a>
                     </li>
                     <li class="nk-menu-item">
                         <a href="html/components/elements/popover.html" class="nk-menu-link"><span class="nk-menu-text">Popovers</span></a>
                     </li>
                     <li class="nk-menu-item">
                         <a href="html/components/elements/progress.html" class="nk-menu-link"><span class="nk-menu-text">Progress</span></a>
                     </li>
                     <li class="nk-menu-item">
                         <a href="html/components/elements/spinner.html" class="nk-menu-link"><span class="nk-menu-text">Spinner</span></a>
                     </li>
                     <li class="nk-menu-item">
                         <a href="html/components/elements/tabs.html" class="nk-menu-link"><span class="nk-menu-text">Tabs</span></a>
                     </li>
                     <li class="nk-menu-item">
                         <a href="html/components/elements/toast.html" class="nk-menu-link"><span class="nk-menu-text">Toasts</span></a>
                     </li>
                     <li class="nk-menu-item">
                         <a href="html/components/elements/tooltip.html" class="nk-menu-link"><span class="nk-menu-text">Tooltip</span></a>
                     </li>
                     <li class="nk-menu-item">
                         <a href="html/components/elements/typography.html" class="nk-menu-link"><span class="nk-menu-text">Typography</span></a>
                     </li>
                     <li class="nk-menu-item">
                         <a href="#" class="nk-menu-link nk-menu-toggle"><span class="nk-menu-text">Utilities</span></a>
                         <ul class="nk-menu-sub">
                             <li class="nk-menu-item"><a href="html/components/elements/util-border.html" class="nk-menu-link"><span class="nk-menu-text">Border</span></a></li>
                             <li class="nk-menu-item"><a href="html/components/elements/util-colors.html" class="nk-menu-link"><span class="nk-menu-text">Colors</span></a></li>
                             <li class="nk-menu-item"><a href="html/components/elements/util-display.html" class="nk-menu-link"><span class="nk-menu-text">Display</span></a></li>
                             <li class="nk-menu-item"><a href="html/components/elements/util-embeded.html" class="nk-menu-link"><span class="nk-menu-text">Embeded</span></a></li>
                             <li class="nk-menu-item"><a href="html/components/elements/util-flex.html" class="nk-menu-link"><span class="nk-menu-text">Flex</span></a></li>
                             <li class="nk-menu-item"><a href="html/components/elements/util-text.html" class="nk-menu-link"><span class="nk-menu-text">Text</span></a></li>
                             <li class="nk-menu-item"><a href="html/components/elements/util-sizing.html" class="nk-menu-link"><span class="nk-menu-text">Sizing</span></a></li>
                             <li class="nk-menu-item"><a href="html/components/elements/util-spacing.html" class="nk-menu-link"><span class="nk-menu-text">Spacing</span></a></li>
                             <li class="nk-menu-item"><a href="html/components/elements/util-others.html" class="nk-menu-link"><span class="nk-menu-text">Others</span></a></li>
                         </ul>
                     </li>
                 </ul>
             </li>
             <li class="nk-menu-item has-sub">
                 <a href="#" class="nk-menu-link nk-menu-toggle">
                     <span class="nk-menu-icon"><em class="icon ni ni-dot-box-fill"></em></span>
                     <span class="nk-menu-text">Crafted Icons</span>
                 </a>
                 <ul class="nk-menu-sub">
                     <li class="nk-menu-item">
                         <a href="html/components/misc/svg-icons.html" class="nk-menu-link">
                             <span class="nk-menu-text">SVG Icon - Exclusive</span>
                         </a>
                     </li>
                     <li class="nk-menu-item">
                         <a href="html/components/misc/nioicon.html" class="nk-menu-link">
                             <span class="nk-menu-text">Nioicon - HandCrafted</span>
                         </a>
                     </li>
                 </ul>
             </li>
             <li class="nk-menu-item has-sub">
                 <a href="#" class="nk-menu-link nk-menu-toggle">
                     <span class="nk-menu-icon"><em class="icon ni ni-table-view-fill"></em></span>
                     <span class="nk-menu-text">Tables</span>
                 </a>
                 <ul class="nk-menu-sub">
                     <li class="nk-menu-item">
                         <a href="html/components/tables/table-basic.html" class="nk-menu-link"><span class="nk-menu-text">Basic Tables</span></a>
                     </li>
                     <li class="nk-menu-item">
                         <a href="html/components/tables/table-special.html" class="nk-menu-link"><span class="nk-menu-text">Special Tables</span></a>
                     </li>
                     <li class="nk-menu-item">
                         <a href="html/components/tables/table-datatable.html" class="nk-menu-link"><span class="nk-menu-text">DataTables</span></a>
                     </li>
                 </ul>
             </li>
             <li class="nk-menu-item has-sub">
                 <a href="#" class="nk-menu-link nk-menu-toggle">
                     <span class="nk-menu-icon"><em class="icon ni ni-todo-fill"></em></span>
                     <span class="nk-menu-text">Forms</span>
                 </a>
                 <ul class="nk-menu-sub">
                     <li class="nk-menu-item">
                         <a href="html/components/forms/form-elements.html" class="nk-menu-link"><span class="nk-menu-text">Form Elements</span></a>
                     </li>
                     <li class="nk-menu-item">
                         <a href="html/components/forms/form-layouts.html" class="nk-menu-link"><span class="nk-menu-text">Form Layouts</span></a>
                     </li>
                     <li class="nk-menu-item">
                         <a href="html/components/forms/form-validation.html" class="nk-menu-link"><span class="nk-menu-text">Form Validation</span></a>
                     </li>
                     <li class="nk-menu-item">
                         <a href="html/components/forms/form-wizard.html" class="nk-menu-link"><span class="nk-menu-text">Wizard Basic</span></a>
                     </li>
                     <li class="nk-menu-item">
                         <a href="#" class="nk-menu-link nk-menu-toggle"><span class="nk-menu-text">Rich Editor</span></a>
                         <ul class="nk-menu-sub">
                             <li class="nk-menu-item"><a href="html/components/forms/form-summernote.html" class="nk-menu-link"><span class="nk-menu-text">Summernote</span></a></li>
                             <li class="nk-menu-item"><a href="html/components/forms/form-quill.html" class="nk-menu-link"><span class="nk-menu-text">Quill</span></a></li>
                             <li class="nk-menu-item"><a href="html/components/forms/form-tinymce.html" class="nk-menu-link"><span class="nk-menu-text">Tinymce</span></a></li>
                         </ul>
                     </li>
                 </ul>
             </li>
             <li class="nk-menu-item has-sub">
                 <a href="#" class="nk-menu-link nk-menu-toggle">
                     <span class="nk-menu-icon"><em class="icon ni ni-pie-fill"></em></span>
                     <span class="nk-menu-text">Charts</span>
                 </a>
                 <ul class="nk-menu-sub">
                     <li class="nk-menu-item">
                         <a href="html/components/charts/chartjs.html" class="nk-menu-link"><span class="nk-menu-text">Chart JS</span></a>
                     </li>
                     <li class="nk-menu-item">
                         <a href="html/components/charts/knob.html" class="nk-menu-link"><span class="nk-menu-text">Knob JS</span></a>
                     </li>
                 </ul>
             </li>
             <li class="nk-menu-item">
                 <a href="html/components/misc/toastr.html" class="nk-menu-link">
                     <span class="nk-menu-icon"><em class="icon ni ni-alert-circle-fill"></em></span>
                     <span class="nk-menu-text">Toastr</span>
                 </a>
             </li>
             <li class="nk-menu-item">
                 <a href="html/components/misc/sweet-alert.html" class="nk-menu-link">
                     <span class="nk-menu-icon"><em class="icon ni ni-caution-fill"></em></span>
                     <span class="nk-menu-text">Sweet Alert</span>
                 </a>
             </li>
             <li class="nk-menu-item">
                 <a href="html/email-templates.html" class="nk-menu-link">
                     <span class="nk-menu-icon"><em class="icon ni ni-template-fill"></em></span>
                     <span class="nk-menu-text">Email Template</span>
                 </a>
             </li>
         </ul>
     </div> -->
  </div>
</div>