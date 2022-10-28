Post::create([
  'title'=> 'judul Kedua',
  'category_id'=> 1,
  'slug'=> 'judul-Kedua',
  'excerpt'=>'Lorem',
  'body'=> 'Lorem here'

])


Category:: create([
  'name'=> 'Programming',
  'slug'=> 'programming'

],
[
  'name'=> 'Web Design',
  'slug'=> 'web-design'
],
[
  'name'=> 'Personal',
  'slug'=> 'personal'
]
)  