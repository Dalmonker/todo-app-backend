export default function Home() {
  return (
    <form>
      <label htmlFor="title">Заголовок</label>
      <input id="title" name="title" />
      <label htmlFor="author">Автор</label>
      <input id="author" name="author" />
      <label htmlFor="description">Описание</label>
      <textarea id="description" name="description" />
      <button>Создать</button>
    </form>
  );
}
