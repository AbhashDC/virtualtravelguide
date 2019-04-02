

<?php
include_once('session.php');
include('include/inc_adminheader.php');
include_once('class/classblog.php');
$blog=new blog();

if($_SERVER['REQUEST_METHOD']=='POST')
{
	extract($_POST);
	$cid=$_SESSION['id'];
	$blog->createBlog($btitle,$bdescription,$bkeyword,$cid);
}
if($_SERVER['REQUEST_METHOD']=='GET')
{
	extract($_GET);
@$blog->publishBlog($bid,$bstat);
}
?>
<div class="wrapper">

	<?php include('include/inc_leftsidebar.php'); ?>

	<div class="main-panel">
		<?php include('include/inc_adminnavbar.php'); ?>
		<div class="content">
			<div class="container-fluid">
				<div class="row">
					<div class="card col-md-12" >
						<!-- Button trigger modal -->
						<?php
						if( $_SESSION['admintype']=='1')
						{
							?>
							<div class="fresh-table">
								<div class="toolbar">
									<!-- <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#addblog">
										Add New Blog
									</button> -->
								</div>
								<table id="fresh-table" class="table table-bordered" style="text-align:center">

									<thead>
										<tr>
											<th data-field="id" data-sortable="true">Id</th>
											<th data-field="blog title" data-sortable="true">Blog title</th>
											<th data-field="blog description" data-sortable="true">Blog description</th>
											<th data-field="location" data-sortable="true">Location</th>

											<th data-field="publish date" data-sortable="true">publish date</th>
											<th data-field="image" data-sortable="true">Image</th>
											<th data-field="keyword" data-sortable="true">Keyword</th>
											<th data-field="status" data-sortable="true">Status</th>
											<th data-field="customer id" data-sortable="true">Customer Id</th>
											<th data-field="action" data-sortable="true">Action</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<?php
											$blogv=$blog->getAllblog();
											foreach($blogv as $key => $blogvalue)
											{
												$bid=$blogvalue['bid'];
													$bstat=$blogvalue['bstatus'];
													$userid=$blogvalue['cid'];
												?>
												<td><?php echo $bid; ?></td>
												<td><?php echo $blogvalue['btitle']; ?></td>
												<td><?php echo substr($blogvalue['bdescription'],0,45); ?>.............</td>
												<td><?php echo $blogvalue['blocation']; ?></td>

												<td><?php echo $blogvalue['bdate']; ?></td>
												<td><img src="../<?php echo $blogvalue['bimg']; ?>" alt="BLog image" style="height:60px;width:60px;"></td>
												<td><?php echo $blogvalue['bkeyword']; ?></td>
												<td><form action="" method="GET">
													<input type="hidden" name="bid" value="<?php echo $bid;?>">
													<input type="hidden" name="bstat" value="<?php echo $bstat;?>">

													 <?php

													if($bstat=='1')
													{
														echo "	<input type='submit' class='btn btn-success btn-xs' value='Published'>";
													}
													else
													{echo "	<input type='submit' class='btn btn-danger btn-xs' value='Not Published'>";}
												 ?></td>
											 </form>
												<td><?php
												$blogvar=$blog->getUsername($userid);
												foreach($blogvar as $key => $uservalue)
												{
													echo $uservalue['cusername'];
													echo " (".$uservalue['cid'].")";
												}
												 ?></td>
												<td>
													<!-- <a href='edit.php?action=edit&bid=". $blogvalue['bid']."&of=blog&sidebar=blog'> <button type='button' rel='tooltip' title='Edit blog' class='btn btn-success btn-simple btn-xs'><i class='fa fa-edit'></i></button></a> -->
													<a href='delete.php?action=delete&bid=<?php echo $bid;?>&of=blog'><button type='button' rel='tooltip' title='Delete blog' class='btn btn-danger btn-simple btn-xs' id='delbutton'>
														<i class='fa fa-times'></i>
													</button></a></td>
												</tr>
											<?php } ?>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>	<?php
					}
					else {
						echo "You dont have Privilage to view this";
					}
					?>
				</div>
			</div>



		<!-- Modal -->
		<div class="modal fade" id="addblog" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel"><b>Add new Blog</b></h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<form method="POST" action=" " enctype="multipart/form-data">
							<div class="form-group">
								<label for="exampleInput1" class="bmd-label-floating">Blog title</label>
								<input type="text" class="form-control"  name="btitle" id="btitle">

							</div>
							<div class="form-group">
								<label for="exampleInput1" class="bmd-label-floating">Description</label>
								<textarea    class="form-control" name="bdescription" id="bdescription"></textarea>

							</div>

							<div class="form-group">
								<label for="exampleInput1" class="bmd-label-floating">Click to upload image</label>
								<input type="file" name="fileToUpload" id="fileToUpload">

							</div>


							<div class="form-group">
								<label for="exampleInput1" class="bmd-label-floating">keyword</label>
								<input type="text" class="form-control" name="bkeyword" id="bkeyword">

							</div>


							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

								<input type="submit" value="Add" class="btn btn-success">
							</form>
						</div>
					</div>
				</div>
			</div>

		</div>

	<script type="text/javascript" src="assets/js/jquery-1.11.2.min.js"></script>

	<script type="text/javascript" src="assets/js/bootstrap-table.js"></script>
	<script type="text/javascript">
	var $table = $('#fresh-table'),
	$alertBtn = $('#alertBtn'),
	full_screen = false;

	$().ready(function(){
		$table.bootstrapTable({
			toolbar: ".toolbar",

			showRefresh: true,
			search: true,
			showToggle: true,
			showColumns: true,
			pagination: true,
			striped: true,
			pageSize: 8,
			pageList: [8,10,25,50,100],

			formatShowingRows: function(pageFrom, pageTo, totalRows){
				//do nothing here, we don't want to show the text "showing x of y from..."
			},
			formatRecordsPerPage: function(pageNumber){
				return pageNumber + " rows visible";
			},
			icons: {
				refresh: 'fa fa-refresh',
				toggle: 'fa fa-th-list',
				columns: 'fa fa-columns',
				detailOpen: 'fa fa-plus-circle',
				detailClose: 'fa fa-minus-circle'
			}
		});



		$(window).resize(function () {
			$table.bootstrapTable('resetView');
		});


		window.operateEvents = {
			'click .like': function (e, value, row, index) {
				alert('You click like icon, row: ' + JSON.stringify(row));
				console.log(value, row, index);
			},
			'click .edit': function (e, value, row, index) {
				alert('You click edit icon, row: ' + JSON.stringify(row));
				console.log(value, row, index);
			},
			'click .remove': function (e, value, row, index) {
				$table.bootstrapTable('remove', {
					field: 'id',
					values: [row.id]
				});

			}
		};

		$alertBtn.click(function () {
			alert("You pressed on Alert");
		});

	});


	function operateFormatter(value, row, index) {
		return [
			'<a rel="tooltip" title="Like" class="table-action like" href="javascript:void(0)" title="Like">',
			'<i class="fa fa-heart"></i>',
			'</a>',
			'<a rel="tooltip" title="Edit" class="table-action edit" href="javascript:void(0)" title="Edit">',
			'<i class="fa fa-edit"></i>',
			'</a>',
			'<a rel="tooltip" title="Remove" class="table-action remove" href="javascript:void(0)" title="Remove">',
			'<i class="fa fa-remove"></i>',
			'</a>'
		].join('');
	}
</script>

	<?php include('include/inc_adminfooterscripts.php'); ?>
