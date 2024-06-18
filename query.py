import pyterrier as pt
import pandas as pd

def search(query):
    if not pt.started():
        pt.init()

    queries = pd.DataFrame([["q1", query]], columns=["qid", "query"])
    index = pt.IndexFactory.of("./uw_index/")
    tf_idf = pt.BatchRetrieve(index, wmodel="TF_IDF")
    results = tf_idf.transform(queries)

    output = []
    for i in range(min(5, len(results))):
        docid = results.docid[i]
        filename = index.getMetaIndex().getItem("filename", docid)
        title = index.getMetaIndex().getItem("title", docid).strip()

        if title != "":
            output.append(title)
        else:
            output.append(filename)

    return output

def get_last_query():
    with open("queries.txt", "r") as file:
        lines = file.readlines()
        if lines:
            return lines[-1].strip()
        else:
            return None

def main():
    query = get_last_query()
    if query:
        results = search(query)
        for result in results:
            print(result)
    else:
        print("No search string found.")

if __name__ == "__main__":
    main()

