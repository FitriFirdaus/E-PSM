<!-- REQUIRED SCRIPTS -->

<!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>


    <!-- Datatable -->
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/responsive/2.2.6/js/dataTables.responsive.min.js"></script>

	<script type="text/javascript">
		
	$(document).ready(function(){

		$('#mytable').DataTable({
            alphabetSearch:{
            },
            responsive: true,  
            stateSave: true, 

            // "scrollX": true,         
        });
	});
	
	</script>
    
</body>
</html>