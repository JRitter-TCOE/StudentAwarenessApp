export async function get(url) {
  const response = await $.get(url);
  console.log(response);
  const data = JSON.parse(response).data;
  return data;
}

export async function post(url, req) {
  const response = await $.post(url, req);
  console.log(response);
  const data = JSON.parse(response).data;
  return data;
}

