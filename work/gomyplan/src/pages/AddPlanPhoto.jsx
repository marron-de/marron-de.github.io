import { useState } from "react";
import styled from "styled-components";

// react-bootstrap
import Form from "react-bootstrap/Form";
import InputGroup from "react-bootstrap/InputGroup";

// component
import Header from "../components/Header";
import Footer from "../components/Footer";
import Nav from "../components/Nav";
import PageContainer from "../components/PageContainer";
import PageContent from "../components/PageContent";
import PageBtnbox from "../components/PageBtnbox";
import BigButton from "../components/BigButton";

// style
const AddPlan = styled.div`
  border: 1px solid var(--color-border2);
  border-radius: 10px;
  width: 100%;
  height: 200px;
  background: var(--color-white);
  margin-bottom: 5px;
  transition: var(--transition);

  .darkMode & {
    border: 1px solid var(--color-darkgray);
    background: var(--color-darkgray2);
  }
`;

const AddPlanPhoto = () => {
  const [imageSections, setImageSections] = useState([{ imagePreview: null, isChecked: false }]);
  const [imageCount, setImageCount] = useState(0);

  const isButtonDisabled = () => {
    // 하나라도 체크되거나 이미지가 없으면 버튼 비활성화
    return imageSections.every(section => !section.isChecked || !section.imagePreview);
  };

  const handleFileChange = (index, e) => {
    const file = e.target.files[0];
    if (file) {
      const reader = new FileReader();
      reader.onloadend = () => {
        const newSections = [...imageSections];
        newSections[index].imagePreview = reader.result;

        // 이미지가 추가될 때 체크박스를 자동으로 체크하고 카운트를 증가
        if (!newSections[index].isChecked) {
          newSections[index].isChecked = true;
          setImageCount(prevCount => prevCount + 1);
        }

        setImageSections(newSections);

        // 이미지가 추가되면 새로운 섹션 추가
        setImageSections([...newSections, { imagePreview: null, isChecked: false }]);
      };
      reader.readAsDataURL(file);
    }
  };

  const handleCheckboxChange = (index, e) => {
    const newSections = [...imageSections];
    const isChecked = e.target.checked;

    // 체크박스 상태에 따라 카운트 업데이트
    if (isChecked && newSections[index].imagePreview) {
      setImageCount(prevCount => prevCount + 1);
    } else if (!isChecked && newSections[index].imagePreview) {
      setImageCount(prevCount => prevCount - 1);
    }

    newSections[index].isChecked = isChecked;
    setImageSections(newSections);
  };

  return (
    <>
      {/* Header */}
      <Header type="title2" title="Add Plan Photo" />

      {/* contents */}
      <PageContainer>
        <PageContent padding="LR">
          <Form className="formbox">
            {imageSections.map((section, index) => (
              <Form.Group key={index} className="formitem">
                <AddPlan>
                  <Form.Group controlId={`formFile${index}`} className="file_box">
                    <Form.Label>
                      <span className="icon upload"></span>
                      <span className="txt">Upload Image</span>
                      {section.imagePreview && (
                        <div className="preview">
                          <img src={section.imagePreview} alt="Preview" className="file_img" />
                          <div className="btn_close"></div>
                          <div className="btn_move"></div>
                        </div>
                      )}
                    </Form.Label>
                    <Form.Control type="file" onChange={(e) => handleFileChange(index, e)} />
                  </Form.Group>
                </AddPlan>
                <InputGroup>
                  <Form.Check
                    type="checkbox"
                    name={`Check${index}`}
                    id={`Check${index}`}
                    label="Make this thumbnail visible"
                    className="check_ver"
                    checked={section.isChecked}
                    onChange={(e) => handleCheckboxChange(index, e)}
                  />
                </InputGroup>
              </Form.Group>
            ))}
          </Form>
        </PageContent>
        <PageBtnbox className="fixed">
          <BigButton disabled={isButtonDisabled()}>Photos Added ({imageCount})</BigButton>
        </PageBtnbox>
      </PageContainer>

      {/* Footer */}
      <Footer />

      {/* Navigation */}
      <Nav />
    </>
  );
};

export default AddPlanPhoto;
