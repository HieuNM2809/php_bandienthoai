<?php 
  require_once $level.comp_path."chitietsanpham_data_comment.php";
?>
<div class="container">
    <div class="row mt-4 mb-4 comment">
        <h3 class="col-12 title pl-0">
            Bình luận</h3>
        <div class="col-12 write-comment pl-0 pr-0">
            <div class="input-group mb-3">
                <textarea id="user" name="ComUSer" class="form-control" placeholder="Người đăng" rows="3"></textarea>
                <textarea id="content" name="comCont" class="form-control" placeholder="Nội dung bình luận"
                    rows="3"></textarea>
                <div class="input-group-append">
                    <button onclick="comment()" class="btn btn-success" type="submit" style="height: 100%;">
                        Gửi bình luận</button>
                </div>
            </div>
        </div>
        <div class="col-12 media border p-3">
            <div id="content_conment" class="media-body">
                <?php 
                foreach( $lst_com as $value){
                ?>
                <h4>
                    <?php echo $value['comUser']; ?>
                    <i style="font-size:15px;color: #5c8284;">
                        Đăng <?php echo $value['comTime'] ?>h <?php echo  date('Y-m-d',strtotime($value['comDate']))  ?>
                    </i>
                </h4>
                <p>
                    <?php echo $value['comContent'] ?>
                </p>
                <div style="display:none" ; id="prodIDcom">
                    <?php echo $value['prodID'] ?>
                </div>
                <?php } ?>
                <!-- //reply -->
                <!-- <div class="media p-3">
                    <div class="media-body">
                        <h4>
                            Phạm Thanh Hóa <i  style="font-size:5px;">Đăng ngày 23 Tháng Hai, 2018</i></h4>
                        <p>
                            Đã qua một thời sinh viên, đã từng có những trải nghiệm như bài viết</p>
                    </div>
                </div> -->
            </div>
        </div>
        <!-- ajax -->
        <script>
        function comment() {
            if ($('#user').val() == "" || $('#content').val() == "") {
                alert("Hãy nhập thông tin bình luận");
            } else {
                var url = "../api/chittietsanpham_comment.php?prodID=" + $('#prodIDcom').text() + "&comUser=" + $(
                    '#user').val() + "&comContent=" + $('#content').val();
                const xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("content_conment").innerHTML = this.responseText;
                    }
                };
                xhttp.open("GET", url);
                xhttp.send();
            }

        }
        </script>
    </div>
</div>