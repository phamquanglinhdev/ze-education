<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 30; $i++) {
            $name = fake()->company();
            $course = [
                'name' => $name,
                'slug' => '',
                'thumbnail' => '',
                'category_id' => rand(1, 4),
                'description' => 'Khóa học dành cho những người muốn nâng cao kỹ năng giao tiếp bằng tiếng Anh trong các cuộc họp ở công ty hay với đối tác.',
                'main_content' => '<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><strong><span style="font-family:&quot;Arial&quot;,&quot;sans-serif&quot;"><span style="color:red">Kh&oacute;a học d&agrave;nh cho ai?</span></span></strong></span></span></p>

<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-family:&quot;Arial&quot;,&quot;sans-serif&quot;"><span style="color:#002060">Kh&oacute;a học d&agrave;nh cho những người muốn n&acirc;ng cao kỹ năng giao tiếp bằng tiếng Anh trong c&aacute;c cuộc họp ở c&ocirc;ng ty hay với đối t&aacute;c.</span></span></span></span></p>

<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><strong><span style="font-family:&quot;Arial&quot;,&quot;sans-serif&quot;"><span style="color:red">Gi&aacute;o vi&ecirc;n của BIZ English l&agrave; ai?</span></span></strong></span></span></p>

<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><strong><span style="font-family:&quot;Arial&quot;,&quot;sans-serif&quot;"><span style="color:#002060">Gi&aacute;o vi&ecirc;n Việt Nam:</span></span></strong></span></span></p>

<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-family:&quot;Arial&quot;,&quot;sans-serif&quot;"><span style="color:#002060">Gv Việt Nam của ch&uacute;ng t&ocirc;i l&agrave; c&aacute;c gi&aacute;o vi&ecirc;n:</span></span></span></span></p>

<ul>
	<li><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-family:&quot;Arial&quot;,&quot;sans-serif&quot;"><span style="color:#002060">C&oacute; chứng chỉ tiếng Anh quốc tế IELTS 6.5 &ndash; 8.0</span></span></span></span></li>
	<li><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-family:&quot;Arial&quot;,&quot;sans-serif&quot;"><span style="color:#002060">C&oacute; &iacute;t nhất 2 -3&nbsp; năm kinh nghiệm trong dạy tiếng Anh.</span></span></span></span></li>
	<li><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-family:&quot;Arial&quot;,&quot;sans-serif&quot;"><span style="color:#002060">Nhiều bạn du học sinh từ Mỹ - &Uacute;c - Ch&acirc;u &Acirc;u hoặc tốt nghiệp từ c&aacute;c trường danh tiếng trong nước.</span></span></span></span></li>
</ul>

<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><strong><span style="font-family:&quot;Arial&quot;,&quot;sans-serif&quot;"><span style="color:#002060">Gi&aacute;o vi&ecirc;n Philippine</span></span></strong></span></span></p>

<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-family:&quot;Arial&quot;,&quot;sans-serif&quot;"><span style="color:#002060">Gv Philippine đều l&agrave; những gi&aacute;o vi&ecirc;n c&oacute; nhiều&nbsp; năm kinh nghiệm dạy tiếng Anh được ch&uacute;ng t&ocirc;i chọn lọc rất kỹ - trải qua nhiều v&ograve;ng phỏng vấn v&agrave; dạy thử. Tất cả ch&uacute;ng ta đều biết gi&aacute;o vi&ecirc;n Philippine dạy tiếng Anh rất tốt &ndash; v&agrave; đang dạy tiếng Anh cho rất nhiều nước tr&ecirc;n thế giới như Nhật, H&agrave;n, Trung Quốc,&hellip;</span></span></span></span></p>

<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-family:&quot;Arial&quot;,&quot;sans-serif&quot;"><span style="color:#002060">Ch&uacute;ng t&ocirc;i cam kết về chất lượng gi&aacute;o vi&ecirc;n. Bạn được chọn v&agrave; đổi gi&aacute;o vi&ecirc;n trong qu&aacute; tr&igrave;nh học nếu bạn cảm thấy kh&ocirc;ng h&agrave;i l&ograve;ng.</span></span></span></span></p>

<p>&nbsp;</p>
',
                'learn_method' => '<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><strong><span style="font-family:&quot;Arial&quot;,&quot;sans-serif&quot;"><span style="color:red">Bạn sẽ học thế n&agrave;o?</span></span></strong></span></span></p>

<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-family:&quot;Arial&quot;,&quot;sans-serif&quot;"><span style="color:#002060">Gi&aacute;o vi&ecirc;n sẽ gọi video call qua Zoom &ndash; Skype &ndash; Zalo v&agrave; chia sẻ m&agrave;n h&igrave;nh (m&agrave;n h&igrave;nh m&aacute;y t&iacute;nh &ndash; điện thoại của bạn sẽ giống như một c&aacute;i bảng) để dạy bạn. Việc học kh&ocirc;ng kh&aacute;c g&igrave; gi&aacute;o vi&ecirc;n ngồi cạnh v&agrave; dạy trực tiếp cho bạn.</span></span></span></span></p>

<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-family:&quot;Arial&quot;,&quot;sans-serif&quot;"><span style="color:#002060">Bạn c&oacute; thể xem Video lớp học thực tế sau để hiểu về c&aacute;ch thức học:</span></span></span></span></p>

<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><strong><span style="font-family:&quot;Arial&quot;,&quot;sans-serif&quot;"><span style="color:red">Bạn chọn lịch học thế n&agrave;o?</span></span></strong></span></span></p>

<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-family:&quot;Arial&quot;,&quot;sans-serif&quot;"><span style="color:#002060">Sau khi đăng k&yacute; bạn sẽ chọn một lịch học ph&ugrave; hợp nhất với bạn.</span></span></span></span></p>

<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-family:&quot;Arial&quot;,&quot;sans-serif&quot;"><span style="color:#002060">V&iacute; dụ: một tuần 2 buổi v&agrave;o 8 &ndash; 8h45 tối thứ 2 v&agrave; 5; hoặc một tuần 3 buổi v&agrave;o 9 &ndash; 10h tối thứ 3, 5 v&agrave; 7. </span></span></span></span></p>

<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-family:&quot;Arial&quot;,&quot;sans-serif&quot;"><span style="color:#002060">Việc chọn học bao nhi&ecirc;u buổi 1 tuần, v&agrave;o giờ n&agrave;o do bạn quyết định &ndash; BIZ English sẽ dạy theo y&ecirc;u cầu của bạn.</span></span></span></span></p>

<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-family:&quot;Arial&quot;,&quot;sans-serif&quot;"><span style="color:#002060">Sau khi chọn lịch học, BIZ English sẽ sắp xếp gi&aacute;o vi&ecirc;n dạy bạn theo lịch bạn đ&atilde; chọn h&agrave;ng tuần. Lịch học cố định giống như lịch học Offline tr&ecirc;n lớp hay tại trung t&acirc;m, chỉ kh&aacute;c l&agrave; bạn ngồi tại nh&agrave; để học trực tuyến.</span></span> </span></span></p>

<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-family:&quot;Arial&quot;,&quot;sans-serif&quot;"><span style="color:#002060">Khi bạn c&oacute; việc đột xuất hay bận th&igrave; bạn c&oacute; thể b&aacute;o trước gi&aacute;o vi&ecirc;n để gi&aacute;o vi&ecirc;n sắp xếp lịch học b&ugrave; cho bạn hoặc hủy buổi học.</span></span></span></span></p>

<p>&nbsp;</p>
',

            ];
            Course::create($course);
        }
    }
}
