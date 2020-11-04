<!--
ЗАДАЧА: Вывести три поста (автор и текст поста) из своей таблицы twitter.
ЧТО НУЖНО СДЕЛАТЬ:
1. Подключится к своей Базе данных.
2. Сделать запрос к таблице twitter.
3. Вывести три поста.

Внизу читай комментарии, где что выводить.

Если закончил, сделай добавление нового твита.

Если сделал, добавление нового твита, создай таблицу 'img', в которой хранятся:
	- аватар автора,
	- картинка поста.
	
Выведи на странице изображения из таблицы 'img'.
-->

<!DOCTYPE html>
<html>
<head>
	<title>Главная</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body class="bg-light">
	<!-- ШАПКА -->
	<div class="header border-bottom pb-2">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-4 col-xl-5">
					<div class="row">
						<div class="col-4">
							<img src="img/icons8-home-50.png" class="w-25">
							<a href="">Домой</a>
						</div>
						<div class="col-4 px-0">
							<img src="img/icons8-notification-50.png" class="w-25">
							<a href="">Уведомления</a>
						</div>
						<div class="col-4">
							<img src="img/icons8-new-post-50.png" class="w-25">
							<a href="">Сообщения</a>
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-md-4 col-xl-3">
					<img class="w-25" src="img/icons8-twitter-50.png" >
				</div>
				<div class="col-sm-12 col-md-4 col-xl-4">
					<input type="" name="">
					<a href=""><img src="img/avatar.jpg" class="rounded-circle"></a>
					<button type="button" class="btn btn-primary">Твитнуть</button>					
				</div>
			</div>
		</div>
	</div>
	<!-- ДИВ С КОНТЕНТОМ -->						
	<div class="main mt-3">
		<div class="container">
			<div class="row">
				<!-- левая колонка --> <!-- ПРОФИЛЬ-->
				<div class="col-sm-12 col-md-4 col-xl-3">
					<!-- Описание профиля -->
					<div class=" bg-white">
						<!--фон-->
						<a href=""><img src="img/background.jpg" class="img-fluid"></a>
						<!--карточка-->
						<div class="row">
							<div class="col-4">
								<a href=""><img src="img/avatar.jpg" class="rounded-circle"></a>
							</div>
							<div class="col-8">
								<div>
									<a href="">Mary Smith</a>
								</div>
								<div>
									<a href="">@MarySmith</a>
								</div>
							</div>
						</div>
						<!--Статистика-->
						<div class="row pt-1 pb-1 pr-1 pl-1">
							<div class="col-6">
								<a href="">
									<b>Твиты</b><br>276
								</a>
							</div>

							<div class="col-6">
								<a href="">
									<b>Читаемые</b><br> 106
								</a>
							</div>										
						</div>	
					</div>

					<!-- Актуальные темы для вас-->
					<div class="bg-white mt-4 pt-3 pb-3 pl-3 pr-3" >
						<div class="">
							<h6>Актуальные темы для вас</h6>
						</div>

						<div>
							<a href="">#inktober</a>
						</div>
						<div>
							<a href="">#movies</a>
						</div>
						
					</div>
				</div>

				<!-- Средняя колонка: Лента твитов: добавить, твиты -->
				<div class="col-sm-12 col-md-8 col-xl-6" style="">
					<div class="pt-2 bg-white">
						<div class="row">
							<div class="col-2">
								<img src="img/avatar.jpg" class="rounded-circle">
							</div>
							<div class="col-10">
								<form action="insert.php" method="GET">
									<input class="col-12 form-control" type="" placeholder="Автор" name="author">
									<input class="col-12 form-control" type="" placeholder="Что нового?" name="text">
									<button class="" style="color: white;background-color: #0080FF; border-radius: 5px">Твитнуть</button>
								</form>
									<!-- 
									
									ЗДЕСЬ СОЗДАЕШЬ ФОРМУ С ИНПУТАМИ И КНОПКОЙ "Твитнуть"

								-->
							</div>
						</div>
						<!-- новый пост -->
						<div class="row mt-4">
							<div class="col-2">
								<?php
									if ($_GET["author"]!=null) {
										echo "<img src='img/avatar.jpg' class='rounded-circle'>";
										# code...
									}
								?>
							</div>
							<div class="col-xl-10">
									<h5>
										<?php
											$a = $_GET["author"];
											$b = $_GET["text"];
											echo $a;
										?>
									<!--
		

										ЗДЕСЬ ВЫВОДИШЬ ИМЯ АВТОРА НОВОГО ТВИТА

									-->
									</h5>
									<p>
										<?php
										echo $b;  
										?>
									<!-- 

										ЗДЕСЬ ВЫВОДИШЬ ТЕКСТА НОВОГО ТВИТА

									--></p>
							</div>
						</div>

						<!-- 

							НИЖЕ ТРИ ДИВА ДЛЯ ВЫВОДА ТВИТОВ ИЗ ТАБЛИЦЫ 'twitter'

						 -->
						<div class="row mt-4">
							<!-- account_image -->
							<div class="col-2">
								<img src="img/avatar.jpg" class="rounded-circle">
							</div>
							<div class="col-xl-10">
								<div class="d-flex">
									<h5>
										<?php
											$connect = mysqli_connect("127.0.0.1", "root", "", "twitter");
											$query = mysqli_query($connect, "SELECT * FROM tweets");  
											$result = $query->fetch_assoc();
											$result2 = $query->fetch_assoc();
											$result3 = $query->fetch_assoc();
											$result4 = $query->fetch_assoc();

											$sql = "SELECT * FROM tweets";
											$query1 = mysqli_query($connect, $sql);
											$stroka1 = $query1->fetch_assoc();
											echo $stroka1["author"];

											
										?>
									<!-- 
									ЗДЕСЬ: 
										1. ПОДКЛЮЧИСЬ К СВОЕЙ БАЗЕ ДАННЫХ
										2. СДЕЛАЙ ЗАПРОС К ТАБЛИЦЕ

									ЗДЕСЬ ВЫВОДИШЬ ИМЯ АВТОРА ПЕРВОГО ТВИТА ИЗ ТАБЛИЦЫ 'twitter'
	
									-->

										<?php 
											echo $result["author"];
										?>


									</h5>
								</div>
								<div>
									<p>
										<?php
											echo $result["text"];
										?>
									<!-- 

									ЗДЕСЬ ВЫВОДИШЬ ТЕКСТ ПЕРВОГО ТВИТА ИЗ ТАБЛИЦЫ 'twitter'

									-->	

									</p>
									<?php  
										echo "<img class='w-100' src='".$result["img"]."'>"
									?>
									<!-- 

									место для картинки

									-->	
								</div>
							</div>
						</div>
						<div class="row mt-4">
							<!-- account_image -->
							<div class="col-2">
								<img src="img/4.jpg" class="rounded-circle w-100">
							</div>
							<div class="col-xl-10">
								<div class="d-flex">
									<h5>
										<?php
											echo $result2["author"];
										?>
									<!-- 

									ЗДЕСЬ ВЫВОДИШЬ ИМЯ АВТОРА ВТОРОГО ТВИТА ИЗ ТАБЛИЦЫ 'twitter'

									-->


									</h5>
								</div>
								<div>
									<p>
										<?php
											echo $result2["text"];
										?>
									<!-- 

									ЗДЕСЬ ВЫВОДИШЬ ТЕКСТ ВТОРОГО ТВИТА ИЗ ТАБЛИЦЫ 'twitter'

									-->	

									</p>
									<?php  
										echo "<img class='w-100' src='".$result2["img"]."'>"
									?>
									<!-- 

									место для картинки

									-->	
								</div>
							</div>
						</div>
					</div>
					<div class="row mt-4">
							<!-- account_image -->
							<div class="col-2">
								<img src="img/4.jpg" class="rounded-circle w-100">
							</div>
							<div class="col-xl-10">
								<div class="d-flex">
									<h5>
										<?php
											echo $result3["author"];
										?>
									<!-- 

									ЗДЕСЬ ВЫВОДИШЬ ИМЯ АВТОРА ТРЕТЬЕГО ТВИТА ИЗ ТАБЛИЦЫ 'twitter'

									-->


									</h5>
								</div>
								<div>
									<p>
										<?php
											echo $result3["text"];
										?>
									<!-- 

									ЗДЕСЬ ВЫВОДИШЬ ТЕКСТ ТРЕТЬЕГО ТВИТА ИЗ ТАБЛИЦЫ 'twitter'

									-->	

									</p>
									<?php  
										echo "<img class='w-100' src='".$result3["img"]."'>"
									?>
									<!-- 

									место для картинки

									-->	
								</div>
							</div>
						</div>
				</div>
				<!-- правая колонка -->
                <div class="col-sm-12 col-md-4 col-xl-3">
                    <!-- "Читаемые" -->
                    <div class="bg-white pt-3 pb-3 pl-3 pr-3">
                    	<?php
                    		$sql2 = "SELECT * FROM followings";
							$query2 = mysqli_query($connect, $sql2);
							$stroka2 = $query2->fetch_assoc();  
							$stroka3 = $query2->fetch_assoc();
							$stroka4 = $query2->fetch_assoc();  
                    	?>
                        <!-- форму создать здесь -->
                        <form action="insert2.php" method="GET">
                        	<input class="col-12 form-control" placeholder="Название" style="border-radius: 3px; margin-top: 10px" name="name">
                        	<input class="col-12 form-control" placeholder="Канал" style="border-radius: 3px; margin-top: 10px" name="channel">
                        	<input class="col-12 form-control" placeholder="IMG" style="border-radius: 3px; margin-top: 10px" name="img">
                        	<button class="" style="color: white;background-color: #0080FF; border-radius: 5px; margin-top: 10px">Добавить в читаемые</button>
                        </form>
                        <div class="col-4">
                            <h6>Читаемые</h6>
                        </div>
                        <div class="row mb-3">
                            <div class="col-4">
                                <a href=""><img class="w-100 rounded-circle" src="images/1.jpg"></a> <!-- аватарка, внутри ссылки картинка-->
                            </div>
                            <div class="col-xl-8">
                                <div>
                                    <a href="">LOL KEK</a>  <!-- имя юзера -->
                                    <span style="font-size: 12px;"> @lolkek </span> <!--название аккаунта-->
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-4">
                                <a href=""><img class="w-100 rounded-circle" src="images/2.jpg"></a> <!-- аватарка, внутри ссылки картинка-->
                            </div>
                            <div class="col-xl-8">
                                <div>
                                    <a href="">CHEBUREK</a>  <!-- имя юзера -->
                                    <span style="font-size: 12px;"> @CHEBUREK </span> <!--название аккаунта-->
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-4">
                                <a href=""><img class="w-100 rounded-circle" src=<?php echo "'".$_GET["img"]."'" ?>></a> <!-- аватарка, внутри ссылки картинка-->
                            </div>
                            <div class="col-xl-8">
                                <div>
                                    <a href=""><?php
                                    		echo $stroka2["name"];
                                    	?>
                                    		
                                    </a>  <!-- имя юзера -->
                                    <span style="font-size: 12px;">
                                    	<?php
                                    		echo $stroka2["channel"];
                                      	?> 
                                  	</span> <!--название аккаунта-->
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-4">
                                <a href=""><img class="w-100 rounded-circle" src=<?php echo "'".$stroka3["img"]."'" ?>></a> <!-- аватарка, внутри ссылки картинка-->
                            </div>
                            <div class="col-xl-8">
                                <div>
                                    <a href=""><?php
                                    		echo $stroka3["name"];
                                    	?>
                                    		
                                    </a>  <!-- имя юзера -->
                                    <span style="font-size: 12px;">
                                    	<?php
                                    		echo $stroka3["channel"];
                                      	?> 
                                  	</span> <!--название аккаунта-->
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-4">
                                <a href=""><img class="w-100 rounded-circle" src=<?php echo "'".$stroka4["img"]."'" ?>></a> <!-- аватарка, внутри ссылки картинка-->
                            </div>
                            <div class="col-xl-8">
                                <div>
                                    <a href=""><?php
                                    		echo $stroka4["name"];
                                    	?>
                                    		
                                    </a>  <!-- имя юзера -->
                                    <span style="font-size: 12px;">
                                    	<?php
                                    		echo $stroka4["channel"];
                                      	?> 
                                  	</span> <!--название аккаунта-->
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-4">
                                <a href=""><img class="w-100 rounded-circle" src=<?php echo "'".$_GET["img"]."'"; ?>></a> <!-- аватарка, внутри ссылки картинка-->
                            </div>
                            <div class="col-xl-8">
                                <div>
                                    <a href=""><?php
                                    		$a = $_GET["name"];
                                    		echo $a["name"];
                                    	?>
                                    		
                                    </a>  <!-- имя юзера -->
                                    <span style="font-size: 12px;">
                                    	<?php
                                    		echo $_GET["channel"];
                                      	?> 
                                  	</span> <!--название аккаунта-->
                                </div>
                            </div>
                        </div>
                    </div>
                    
          
                </div>
			</div>
		</div>
	</div>
</body>
</html>