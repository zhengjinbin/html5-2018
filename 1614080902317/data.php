<?php

			$imgListData=array 
				( 
					    array 
					    ( 
					              "id" =>"1",
							      "name" => "月饼",
							      "imgUrl" => "/image/food1.jpg",
							      "desc" => "是久负盛名的中国传统糕点之一，中秋节节日食俗。象征着团圆和睦。"
					    ),
					    array 
					    ( 
					              "id" => "2",
							      "name" => "粽子",
							      "imgUrl" => "/image/food2.jpg",
							      "desc" => "粽子，即粽籺，由粽叶包裹糯米蒸制而成，是中华民族传统节庆食物之一。"
						),
						array 
					    ( 
					              "id" => "3",
							      "name" => "饺子",
							      "imgUrl" => "/image/food3.jpg",
							      "desc" => "饺子距今已有一千八百多年的历史了，是中国北方民间的主食和地方小吃。"
						),
						array 
					    ( 
					              "id" => "4",
							      "name" => "汤圆",
							      "imgUrl" => "/image/food4.jpg",
							      "desc" => "汤圆是中国传统小吃的代表之一，同时也是元宵节最具特色的食物，历史十分悠久。"
						)
				);

				
				echo(json_encode($imgListData,JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE));

