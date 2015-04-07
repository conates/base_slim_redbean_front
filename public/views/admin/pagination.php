							<?php if ($paginator['totalPages']>1):?>
								<nav class="pagination">
									<ul>
										<li><a href="<?php echo SITE_URL; ?>/admin"><<</a></li>
								<?php 
									$current = $paginator['current_page'];
									if ($paginator['current_page']<=3) {
										$paginator['current_page'] = 4;
									}
									if ($paginator['totalPages']==$paginator['current_page']) {
									 	$paginator['current_page'] = $paginator['totalPages']-3;
									 } 

								?>

								<?php 

									for ($i=(intval($paginator['current_page'])-3); $i <= (intval($paginator['current_page'])+3); $i++):

								?>
										<li class="<?php echo ($i==$current) ? 'active' : '' ; ?>"><a href="<?php echo SITE_URL; ?>/admin/<?php echo $i; ?>"><?php echo $i; ?></a></li>
								<?php
										if($paginator['totalPages']-$i<=0):
											break;
										endif;
										if ($i>=(intval($paginator['current_page']))+3 && $paginator['totalPages']!=$paginator['current_page']) {
											echo '<li><a href="#">...</a></li>';
											break;
										}

									endfor; 
								?>
										<li><a href="<?php echo SITE_URL; ?>/admin/<?php echo $paginator['totalPages']; ?>">>></a></li>

								  </ul>
								</nav>
							<?php endif; ?>