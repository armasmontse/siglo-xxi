<?php get_header() ?>
<!--
.row//width100%//padding de los bordes//bgc si hay pleca
	.container//maxwidth: limite de la pagina
		.col// width, padd(medianil o gutter) divide el container
			.box//paddings pos relativa posiciona los elementos en dentro de
 -->
<!--  GRID SUJETA A POSIBLES CAMBIOS EN RESPONSIVE -->
<div class="debug">
	<h1>Row</h1>
	<div class="grid__row"></div>

	<h1>Container</h1>
	<div class="grid__row">
		<div class="grid__container">
			<div class="grid__box">
				<h1>CONTAINER</h1>
			</div>
		</div>
	</div>

	<div class="grid__row">
		<div class="grid__container">
			<div class="grid__col-1-1 grid__offset-1-2">
				<div class="grid__box">
					<h1>Columna 1</h1>
				</div>
			</div>
		</div>

		<div class="grid__container">
			<div class="grid__col-1-2">
				<div class="grid__box">
					<h1>Columna 1/2</h1>
				</div>
			</div>
			<div class="grid__col-1-2">
				<div class="grid__box">
					<h1>Columna 1/2</h1>
				</div>
			</div>
		</div>

		<div class="grid__container">
			<div class="grid__col-1-3">
				<div class="grid__box">
					<h1>Columna 1/3</h1>
				</div>
			</div>
			<div class="grid__col-1-3">
				<div class="grid__box">
					<h1>Columna 1/3</h1>
				</div>
			</div>
			<div class="grid__col-1-3">
				<div class="grid__box">
					<h1>Columna 1/3</h1>
				</div>
			</div>
		</div>

		<div class="grid__container">
			<div class="grid__col-1-4">
				<div class="grid__box">
					<h1>Columna 1/4</h1>
				</div>
			</div>
			<div class="grid__col-1-4">
				<div class="grid__box">
					<h1>Columna 1/4</h1>
				</div>
			</div>
			<div class="grid__col-1-4">
				<div class="grid__box">
					<h1>Columna 1/4</h1>
				</div>
			</div>
			<div class="grid__col-1-4">
				<div class="grid__box">
					<h1>Columna 1/4</h1>
				</div>
			</div>
		</div>

		<div class="grid__container">
			<div class="grid__col-1--3">
				<div class="grid__box">
					<h1>Columna 1/3</h1>
				</div>
			</div>
			<div class="grid__col-1-6">
				<div class="grid__box">
					<h1>Columna 1/6</h1>
				</div>
			</div>
			<div class="grid__col-1--3">
				<div class="grid__box">
					<h1>Columna 1/3</h1>
				</div>
			</div>
		</div>

		<div class="grid__container">
			<div class="grid__col-1--3">
				<div class="grid__box">
					<h1>Columna 1/3</h1>
				</div>
			</div>
			<div class="grid__col-1--3">
				<div class="grid__box">
					<h1>Columna 1/3</h1>
				</div>
			</div>
			<div class="grid__col-1--3">
				<div class="grid__box">
					<h1>Columna 1/3</h1>
				</div>
			</div>
			<div class="grid__col-1--3">
				<div class="grid__box">
					<h1>Columna 1/3</h1>
				</div>
			</div>
		</div>
		
		<h1>FILOSOFIA DE LA ESCUELA</h1>
		<div class="grid__container">
			<div class="grid__col-1--3">
				<div class="grid__box">
					<h1>Columna 1/3</h1>
				</div>
			</div>
			<div class="grid__col-1--3">
				<div class="grid__box">
					<h1>Columna 1/3</h1>
				</div>
			</div>
			<div class="grid__col-1-5 grid__col-offset-1-1">
				<div class="grid__box">
					<h1>Columna 1/5</h1>
				</div>
			</div>
		</div>

		<h1>Footer</h1>
		<div class="grid__container">
			<div class="grid__col-1--2 grid__col-offset-1-1">
				<div class="grid__box">
					<h1>Columna 1/2</h1>
				</div>
			</div>
			<div class="grid__col-1--3 grid__col-offset-1-1">
				<div class="grid__box">
					<h1>Columna 1/3</h1>
				</div>
			</div>
			<div class="grid__col-1--3 grid__col-offset-1-1">
				<div class="grid__box">
					<h1>Columna 1/3</h1>
				</div>
			</div>
		</div>


		<!-- offset -->
		<div class="grid__container">
			<div class="grid__col-1-6 grid__col-offset-1-3">
				<div class="grid__box">
					<h1>Columna offset 1/3 col 6</h1>
				</div>
			</div>
		</div>

		<div class="grid__container">
			<div class="grid__col-1-9 grid__col-offset-1-3">
				<div class="grid__box">
					<h1>Columna offset 1/3 col 9</h1>
				</div>
			</div>
		</div>

		<div class="grid__container">
			<div class="grid__col-1-10 grid__col-offset-1-2">
				<div class="grid__box">
					<h1>Columna offset 1/2 col 10</h1>
				</div>
			</div>
		</div>


	</div>
</div>
		<!-- <h1 class="white">Una columna</h1>
		<div class="grid__container">
			<div class="grid__col-1-1">
				<div class="grid__box">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo, expedita!
				</div>
			</div>
		</div>
	</div>
	<div class="grid__row">
		<h1 class="white">Dos columnas</h1>
		<div class="grid__container">
			<div class="grid__col-1-2">
				<div class="grid__box">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo, expedita!
				</div>
			</div>
			<div class="grid__col-1-2">
				<div class="grid__box">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo, expedita!
				</div>
			</div>
		</div>
	</div>

	<div class="grid__row">
		<h1 class="white">3 Columnas</h1>
		<div class="grid__container">
			<div class="grid__col-1-3">
				<div class="grid__box">
					<h1>.grid__col-1-3 .grid__box</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis vitae cumque expedita asperiores corporis iusto itaque doloremque, architecto, eum eius provident ad animi delectus ratione.</p>
				</div>
			</div>
			<div class="grid__col-1-3">
				<div class="grid__box">
					<h1>.grid__col-1-3 .grid__box</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis vitae cumque expedita asperiores corporis iusto itaque doloremque, architecto, eum eius provident ad animi delectus ratione.</p>
				</div>
			</div>
			<div class="grid__col-1-3">
				<div class="grid__box">
					<h1>.grid__col-1-3 .grid__box</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis vitae cumque expedita asperiores corporis iusto itaque doloremque, architecto, eum eius provident ad animi delectus ratione.</p>
				</div>
			</div>
		</div>
	</div>
	<div class="grid__row">
		<h1 class="white">4 Columnas</h1>
		<div class="grid__container">
			<div class="grid__col-1-4">
				<div class="grid__box">
					<h1>.grid__col-1-4 .grid__box</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis vitae cumque expedita asperiores corporis iusto itaque doloremque, architecto, eum eius provident ad animi delectus ratione.</p>
				</div>
			</div>
			<div class="grid__col-1-4">
				<div class="grid__box">
					<h1>.grid__col-1-4 .grid__box</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis vitae cumque expedita asperiores corporis iusto itaque doloremque, architecto, eum eius provident ad animi delectus ratione.</p>
				</div>
			</div>
			<div class="grid__col-1-4">
				<div class="grid__box">
					<h1>.grid__col-1-4 .grid__box</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis vitae cumque expedita asperiores corporis iusto itaque doloremque, architecto, eum eius provident ad animi delectus ratione.</p>
				</div>
			</div>
			<div class="grid__col-1-4">
				<div class="grid__box">
					<h1>.grid__col-1-4 .grid__box</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis vitae cumque expedita asperiores corporis iusto itaque doloremque, architecto, eum eius provident ad animi delectus ratione.</p>
				</div>
			</div>
		</div>
	</div>

	
	<div class="grid__row">
		<h1>MENU HEADER  offset 1</h1>
		<div class="grid__container">
			<div class="grid__col-1-5 grid__col-offset-1-1">
				<div class="grid__box">
					<h1>grid__col-1-2--big grid__offset-1-2</h1>
					.grid__col-1-2--big
				</div>
			</div>

			<div class="grid__col-1-2 grid__col-1-2--mobil">
				<div class="grid__box">
					<h1>grid__col-1-2--big grid__offset-1-2</h1>
					.grid__col-1-2--small
				</div>
			</div>
			
		</div>
	</div>

	<div class="grid__row">
		<h1>FOOTER offset 1</h1>
		<div class="grid__container">
			<div class="grid__col-1-4 grid__col-offset-1-1">
				<div class="grid__box">
					<h1>grid__col-1-2--big grid__offset-1-2</h1>
					.grid__col-1-2--big
				</div>
			</div>
			<div class="grid__col-1-3">
				<div class="grid__box">
					<h1>grid__col-1-2--big grid__offset-1-2</h1>
					.grid__col-1-2--small
				</div>
			</div>
			<div class="grid__col-1-4">
				<div class="grid__box">
					<h1>grid__col-1-2--big grid__offset-1-2</h1>
					.grid__col-1-2--small
				</div>
			</div>
		</div>
	</div>

	<div class="grid__row">
		<h1>OFFSET 3</h1>
		<div class="grid__container">
			<div class="grid__col-1-9 grid__col-offset-1-3">
				<div class="grid__box">
					<h1>grid__col-1-2--big grid__offset-1-2</h1>
					.grid__col-1-2--big
				</div>
			</div>
			
		</div>
	</div>

 -->




















<?php get_footer() ?>