<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;

/**
 * ja.php
 * Author     : metheno
 * Date       : 2016/12/24
 * Version    : 0.1.2
 * Description: 英式日语
 */
class Lang_ja extends Lang {

    /**
     * @return string 返回语言名称
     */
    public function name() {
        return "日本語";
    }

    /**
     * @return array 返回包含翻译文本的数组
     */
    public function translated() {
        return array(
            // Post
            '阅读: %d' => '読者: %d',
            '编辑' => '編集',
            '标签: ' => 'タグ: ',
            '无' => '-',
            '返回文章列表' => 'アーカイブに戻る',
            '文章二维码' => 'QRコード',
            '打赏' => '謝礼',

            // 页眉 head
            '分类 %s 下的文章' => 'カテゴリ%sの下にある記事',
            '包含关键字 %s 的文章' => 'キーワード%sを含む記事',
            '标签 %s 下的文章' => 'タグ%sの下の記事',
            '%s 发布的文章' => '%sの投稿記事',
            
            '当前网页 <strong>不支持</strong> 你正在使用的浏览器. 为了正常的访问, 请 <a href="%s">升级你的浏览器</a>.' => '<a href="%s">ブラウザをアップグレード</a>して<strong>より良い体験を得る</strong>ことを強くおすすめします。',

            // 评论 Comments
            '评论' => 'コメント',
            '1 条评论' => '1 つのコメント',
            '%d 条评论' => '%d つのコメント',
            '评论列表' => 'コメント・リスト',
            '添加新评论' => 'コメントを残してください',
            '提交评论' => '送信',
            '称呼' => '名前',
            '电子邮件' => 'Eメール',
            '网站' => 'ウェブサイト',
            '回复' => 'Reply',
            '在这里输入你的评论...' => '何かを書いてください…',
            '<strong>不接收</strong>回复邮件通知' => '<strong>DO NOT</strong> Send me reply emails',

            //参数分别为: 用户链接、用户名、登出链接
            '登录为 <a href="%s">%s</a>. <a href="%s" title="Logout">退出 &raquo;</a>' => '<a href="%s">％s</a>としてログインしたユーザー。<a href="%s" title="Logout">ログアウト＆raquo; </a>',

            '登录为' => '%sとしてログイン',
            '退出' => 'ログアウト',

            // 列表 List
            '阅读全文' => '読み続けて',
            '没有找到内容' => '内容が見つかりません。',

            // 归档 Archives
            '标签云' => 'タグクラウド',
            '时间归档' => 'アーカイブ',

            // 404页面 404
            '页面未找到' => 'ページが見つかりません。',

            // 侧边栏 Side Menu
            '搜索...' => 'サーチ…',
            '控制台' => 'ダッシュボード',
            '首页' => 'Top',
            '关于' => 'このサイトについて',
            '文章分类' => '記事カテゴリ',
            '分类' => '記事カテゴリ',
            '夜间模式' => 'ナイトモード',
            '日间模式' => '昼間モード',
            '自动模式' => '自動モード',
            '文章目录' => 'カタログ',


            // 页脚 Footer
            '本页链接的二维码' => 'この記事のQRコード',
            '打赏二维码' => '報酬のためのQRコード',
            '上一篇: ' => '前の記事: ',
            '下一篇: ' => '次の記事: ',
            '没有了' => 'なし',


            // 日期格式化'
            '%d 年前'   => '%d Years Ago',
            '%d 个月前' => '%d Mouths Ago',
            '%d 天前'   => '%d Days Ago',
            '%d 小时前' => '%d Hours Ago',
            '%d 分钟前' => '%d Minutes Ago',
            '%d 秒前'   => '%d Seconds Ago',
            '1 年前'   => '1 Year Ago',
            '1 个月前' => '1 Mouth Ago',
            '1 天前'   => '1 Day Ago',
            '1 小时前' => '1 Hour Ago',
            '1 分钟前' => '1 Minute Ago',
            '1 秒前'   => '1 Second Ago',
            
        );
    }

    /**
     * @return string 返回日期的格式化字符串
     */
    public function dateFormat() {
        return "Y-m-d";
    }
}